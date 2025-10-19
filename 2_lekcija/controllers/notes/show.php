<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 1);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);
