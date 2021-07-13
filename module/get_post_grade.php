<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subject = $_POST['subject'];
    $rank = $_POST['rank'];
    $samerank = $_POST['samerank'];
    $students = $_POST['students'];
    $time = $_POST['time'];
}

$subjects = array();
$modified_grade = 0;
$total_time = 0;

for ($i = 0; $i < sizeof($subject); $i++) {

    $percent = ($rank[$i] + ($samerank[$i] - 1) / 2) / $students[$i] * 100;

    if ($percent <= 4.0) $thistimerank = 1;
    elseif ($percent <= 11.0) $thistimerank = 2;
    elseif ($percent <= 23.0) $thistimerank = 3;
    elseif ($percent <= 40.0) $thistimerank = 4;
    elseif ($percent <= 60.0) $thistimerank = 5;
    elseif ($percent <= 77.0) $thistimerank = 6;
    elseif ($percent <= 89.0) $thistimerank = 7;
    elseif ($percent <= 96.0) $thistimerank = 8;
    elseif ($percent <= 100.0) $thistimerank = 9;
    else $thistimerank = 10;

    $arrtopush = array($subject[$i], $rank[$i], $samerank[$i], $students[$i], $time[$i], $thistimerank);
    array_push($subjects, $arrtopush);

    $modified_grade += $thistimerank * $time[$i];
    $total_time += $time[$i];
}

$final_grade = $modified_grade / $total_time;
