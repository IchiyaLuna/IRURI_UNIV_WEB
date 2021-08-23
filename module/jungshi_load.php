<?php

$hostname = "db.iruri.gabia.io";
$user = "iruri";
$password = "iruridb3307";
$dbname = "dbiruri";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$sql = "SELECT * FROM jungshi_data WHERE time = '{$year}" . "{$month}'";

$fetch_all = mysqli_query($database, $sql);

$subject_list = array();

while ($row = mysqli_fetch_array($fetch_all)) {

    $subject_list[$row['code']] = $row;
}

mysqli_close($database);
