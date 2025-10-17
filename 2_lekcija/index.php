<?php
require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

// :: - scope resolution operator
$posts = $db->query("select * from posts") ->fetchAll();

//dsn - data source name


foreach ($posts as $post){ 
    
    echo "<li>" . $post['title'] . "</li>";
}

?>
