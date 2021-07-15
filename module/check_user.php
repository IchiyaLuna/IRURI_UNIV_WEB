<?php
if (!isset($_POST['user-id']) || !isset($_POST['user-pw'])) {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('입력 오류.')</script>";
    echo "<script>window.location.replace('../login.php');</script>";
    exit;
}

$user_id = $_POST['user-id'];
$user_pw = $_POST['user-pw'];

$hostname = "localhost";
$user = "iruri";
$password = "test123";
$dbname = "sushi_db";

$database = mysqli_connect($hostname, $user, $password, $dbname);

if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
}

$hash = password_hash($user_pw, PASSWORD_DEFAULT);

$sql = "SELECT * FROM admin WHERE id='$user_id' and pwdhash='$hash'";

if ($result = mysqli_fetch_array(mysqli_query($database, $sql))) {

    echo "<script>window.location.replace('../admin.php');</script>";
} else {

    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('잘못된 계정입니다.')</script>";
    echo "<script>window.location.replace('../login.php');</script>";
    exit;
}
