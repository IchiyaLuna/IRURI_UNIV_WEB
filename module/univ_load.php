<?php

$hostname = "db.iruri.gabia.io";
$user = "iruri";
$password = "iruridb3307";
$dbname = "dbiruri";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

if ($type == "인문") {
    $sql = "SELECT * FROM sushi_2022_univ WHERE type = '인문'";
} elseif ($type == "자연") {
    $sql = "SELECT * FROM sushi_2022_univ WHERE type = '자연'";
}

$fetch_all = mysqli_query($database, $sql);

$univ_list = array();

while ($row = mysqli_fetch_array($fetch_all)) {

    array_push($univ_list, $row);
}

mysqli_close($database);
