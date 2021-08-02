<?php

$hostname = "localhost";
$user = "iruri";
$password = "test123";
$dbname = "sushi_db";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$date = date("Y-m-d", time());

$sql = "INSERT INTO dlogs VALUES('{$date}', '{$location}', '{$gender}', '{$type}', '{$deptwant}', '{$simple_avg}', '{$percentile}')";

mysqli_query($database, $sql);

mysqli_close($database);
