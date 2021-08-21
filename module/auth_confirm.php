<?php
function genRandStr($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "user_" . $randomString;
}

$date = date("Y-m-d", time());
$uid = genRandStr();
$phone = $_POST['pnum'];

$hostname = "localhost";
$user = "iruri";
$password = "test123";
$dbname = "sushi_db";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$sql = "INSERT INTO codes VALUES('{$date}', '{$uid}', '{$phone}', 0)";

mysqli_query($database, $sql);

mysqli_close($database);

setcookie("authid", $uid, time() + 3600 * 24 * 31 * 12, "/");

echo 1;
