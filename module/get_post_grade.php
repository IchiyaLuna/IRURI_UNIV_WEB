<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fsubject = $_POST['fsubject'];
    $frank = $_POST['frank'];
    $fsamerank = $_POST['fsamerank'];
    $fstudents = $_POST['fstudents'];
    $ftime = $_POST['ftime'];

    $ssubject = $_POST['ssubject'];
    $srank = $_POST['srank'];
    $ssamerank = $_POST['ssamerank'];
    $sstudents = $_POST['sstudents'];
    $stime = $_POST['stime'];

    $tsubject = $_POST['tsubject'];
    $trank = $_POST['trank'];
    $tsamerank = $_POST['tsamerank'];
    $tstudents = $_POST['tstudents'];
    $ttime = $_POST['ttime'];
} else {
    echo "올바르지 않은 접근.";
    exit;
}

$isFGE = false;
$isSGE = false;
$isTGE = false;

echo sizeof($frank);

for ($i = 0; $i < sizeof($frank); $i++) {
    echo $frank[$i];
}
