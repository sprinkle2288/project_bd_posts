<?php

$db = pg_connect('host=localhost dbname=test_bd user=postgres password=mn124560MN');
$query = "SELECT id, title, content, date FROM posts";
$result = pg_query($query);

if (!$result) {
    echo "Problem with query " . $query . "<br/>";
    echo pg_last_error();
    exit();
}

$myrow = pg_fetch_assoc($result);
$value = $myrow['id'];
$value2 = $myrow['title'];
$value3 = $myrow['content'];
$value4 = $myrow['date'];

echo "$value $value2 $value3 $value4";