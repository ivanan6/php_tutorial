<?php

use Core\Database;
use Core\App;
//Database::class - translate to strng of full namespace path to the class
$db = App::resolve(Database::class);


$notes = $db->query("select * from notes")->findAll();
view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);
