<?php

$db = pg_connect('host=localhost dbname=test_bd user=postgres password=mn124560MN');

$db_title = $_POST['title'];
$db_content = $_POST['content'];
$db_date = $_POST['date'];

pg_query($db,"INSERT INTO posts (title, content, date) VALUES ($db_title, $db_content, $db_date)");

