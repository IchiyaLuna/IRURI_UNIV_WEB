<?php

$user_id = "admin";
$user_pw = "testpw";

$hostname = "localhost";
$user = "iruri";
$password = "test123";
$dbname = "sushi_db";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$hash = password_hash($user_pw, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin VALUES('{$user_id}', '{$hash}')";

mysqli_query($database, $sql);
