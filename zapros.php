<?php
try {
    $db_connection = new PDO(
        'mySQL:host=localhost;dname=test_bd',
        'postgres',
        'mn124560MN'
    );

    $stmt = $db_connection->query("SELECT * FROM `posts`");

    while ($row = $stmt ->fetch()) {
        print_r($row);
    }

    $db_connection = null;
} catch (PDOException $e) {
    print "error!:" . $e->getMessage () . "br/>";
die();
}