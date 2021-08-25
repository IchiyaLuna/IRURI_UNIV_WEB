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
$grade = $_POST['grade'];
$phone = $_POST['pnum'];

$hostname = "db.iruri.gabia.io";
$user = "iruri";
$password = "iruridb3307";
$dbname = "dbiruri";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$sql = "INSERT INTO codes VALUES('{$date}', '{$uid}', '{$grade}', '{$phone}', 1)";

mysqli_query($database, $sql);

mysqli_close($database);

setcookie("authid", $uid, time() + 3600 * 24 * 31 * 12, "/");

echo 1;
