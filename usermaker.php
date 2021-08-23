@@ -1,21 +0,0 @@
<?php

$user_id = "iruriadmin";
$user_pw = "dlfnfl2021!";

$hostname = "db.iruri.gabia.io";
$user = "iruri";
$password = "iruridb3307";
$dbname = "dbiruri";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$hash = password_hash($user_pw, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin VALUES('{$user_id}', '{$hash}')";

mysqli_query($database, $sql);
