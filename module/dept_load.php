<?php

$hostname = "db.iruri.gabia.io";
$user = "iruri";
$password = "iruridb3307";
$dbname = "dbiruri";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$sql = "SELECT * FROM sushi_2022_dept WHERE dcode = '{$deptwant}';";

$fetch_all = mysqli_query($database, $sql);

$dept_list = array();

while ($row = mysqli_fetch_array($fetch_all)) {

    array_push($dept_list, $row);
}

mysqli_close($database);
