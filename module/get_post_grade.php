<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $grade = $_POST['grade-select'];
    $subject = $_POST['subject-select'];
    $rank = $_POST['rank'];
    $samerank = $_POST['samerank'];
    $students = $_POST['students'];
    $time = $_POST['time'];
}

$f_grade = array();
$f_time = array();
$f_avg = array();
$isFGE = false;
$f_mGrade = 0;
$f_tTime = 0;
$f_aGrade = 0;

$s_grade = array();
$s_grade = array();
$s_avg = array();
$isSGE = false;
$s_mGrade = 0;
$s_tTime = 0;
$s_aGrade = 0;

$t_grade = array();
$t_time = array();
$t_avg = array();
$isTGE = false;
$t_mGrade = 0;
$t_tTime = 0;
$t_aGrade = 0;

$kor_mGrade = 0;
$kor_tTime = 0;
$kor_avg = 0;

$math_mGrade = 0;
$math_tTime = 0;
$math_avg = 0;

$eng_mGrade = 0;
$eng_tTime = 0;
$eng_avg = 0;

$sci_mGrade = 0;
$sci_tTime = 0;
$sci_avg = 0;

$soc_mGrade = 0;
$soc_tTime = 0;
$soc_avg = 0;

for ($i = 0; $i < sizeof($grade); $i++) {
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

    if ($grade[$i] == 1) {
        $isFGE = true;

        if (isset($f_grade[$subject[$i]])) {
            $f_grade[$subject[$i]] += $thistimerank * $time[$i];
            $f_time[$subject[$i]] += $time[$i];
        } else {
            $f_grade[$subject[$i]] = $thistimerank * $time[$i];
            $f_time[$subject[$i]] = $time[$i];
        }

        $f_mGrade += $thistimerank * $time[$i];
        $f_tTime += $time[$i];
    } elseif ($grade[$i] == 2) {
        $isSGE = true;

        if (isset($s_grade[$subject[$i]])) {
            $s_grade[$subject[$i]] += $thistimerank * $time[$i];
            $s_time[$subject[$i]] += $time[$i];
        } else {
            $s_grade[$subject[$i]] = $thistimerank * $time[$i];
            $s_time[$subject[$i]] = $time[$i];
        }

        $s_mGrade += $thistimerank * $time[$i];
        $s_tTime += $time[$i];
    } elseif ($grade[$i] == 3) {
        $isTGE = true;

        if (isset($t_grade[$subject[$i]])) {
            $t_grade[$subject[$i]] += $thistimerank * $time[$i];
            $t_time[$subject[$i]] += $time[$i];
        } else {
            $t_grade[$subject[$i]] = $thistimerank * $time[$i];
            $t_time[$subject[$i]] = $time[$i];
        }

        $t_mGrade += $thistimerank * $time[$i];
        $t_tTime += $time[$i];
    }

    if ($subject[$i] == 'ko') {
        $kor_mGrade += $thistimerank * $time[$i];
        $kor_tTime += $time[$i];
    } elseif ($subject[$i] == 'ma') {
        $math_mGrade += $thistimerank * $time[$i];
        $math_tTime += $time[$i];
    } elseif ($subject[$i] == 'en') {
        $eng_mGrade += $thistimerank * $time[$i];
        $eng_tTime += $time[$i];
    } elseif ($subject[$i] == 'sc') {
        $sci_mGrade += $thistimerank * $time[$i];
        $sci_tTime += $time[$i];
    } elseif ($subject[$i] == 'so') {
        $soc_mGrade += $thistimerank * $time[$i];
        $soc_tTime += $time[$i];
    }
}

$sall = ($kor_mGrade + $math_mGrade + $eng_mGrade + $sci_mGrade + $soc_mGrade) / ($kor_tTime + $math_tTime + $eng_tTime + $sci_tTime + $soc_tTime);
$kmesc = ($kor_mGrade + $math_mGrade + $eng_mGrade + $sci_mGrade) / ($kor_tTime + $math_tTime + $eng_tTime + $sci_tTime);
$kmeso = ($kor_mGrade + $math_mGrade + $eng_mGrade + $soc_mGrade) / ($kor_tTime + $math_tTime + $eng_tTime + $soc_tTime);
$kmsc = ($kor_mGrade + $math_mGrade + $sci_mGrade) / ($kor_tTime + $math_tTime + $sci_tTime);
$keso = ($kor_mGrade + $eng_mGrade + $soc_mGrade) / ($kor_tTime + $eng_tTime + $soc_tTime);
