<?php

$hostname = "db.iruri.gabia.io";
$user = "iruri";
$password = "iruridb3307";
$dbname = "dbiruri";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$date = date("Y-m-d", time());

$sql = "INSERT INTO ulogs VALUES('{$date}', '{$location}', '{$gender}', '{$type}', '{$simple_avg}', '{$percentile}')";

mysqli_query($database, $sql);

mysqli_close($database);
