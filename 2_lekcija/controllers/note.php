<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$note = $db->query('select * from notes where user_id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] !== 1);

require 'views/note.view.php'; 
?>