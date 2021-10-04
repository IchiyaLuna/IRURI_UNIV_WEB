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

$flen = 0;
$slen = 0;
$tlen = 0;

for ($i = 0; $i < count($frank); $i++) {
    if ($frank[$i] == "") {
        unset($fsubject[$i]);
        unset($frank[$i]);
        unset($fsamerank[$i]);
        unset($fstudents[$i]);
        unset($ftime[$i]);
    } else {
        $flen++;
    }
}

$fsubject = array_values($fsubject);
$frank = array_values($frank);
$fsamerank = array_values($fsamerank);
$fstudents = array_values($fstudents);
$ftime = array_values($ftime);

for ($i = 0; $i < count($srank); $i++) {
    if ($srank[$i] == "") {
        unset($ssubject[$i]);
        unset($srank[$i]);
        unset($ssamerank[$i]);
        unset($sstudents[$i]);
        unset($stime[$i]);
    } else {
        $slen++;
    }
}

$ssubject = array_values($ssubject);
$srank = array_values($srank);
$ssamerank = array_values($ssamerank);
$sstudents = array_values($sstudents);
$stime = array_values($stime);

for ($i = 0; $i < count($trank); $i++) {
    if ($trank[$i] == "") {
        unset($tsubject[$i]);
        unset($trank[$i]);
        unset($tsamerank[$i]);
        unset($tstudents[$i]);
        unset($ttime[$i]);
    } else {
        $tlen++;
    }
}

$tsubject = array_values($tsubject);
$trank = array_values($trank);
$tsamerank = array_values($tsamerank);
$tstudents = array_values($tstudents);
$ttime = array_values($ttime);


$mod_grade_arr = array(0, 0, 0);
$time_arr = array(0, 0, 0);

$kor_mod = array(0, 0, 0);
$mat_mod = array(0, 0, 0);
$eng_mod = array(0, 0, 0);
$soc_mod = array(0, 0, 0);
$sci_mod = array(0, 0, 0);

$kor_time = array(0, 0, 0);
$mat_time = array(0, 0, 0);
$eng_time = array(0, 0, 0);
$soc_time = array(0, 0, 0);
$sci_time = array(0, 0, 0);

for ($i = 0; $i < $flen; $i++) {
    $percent = ($frank[$i] + ($fsamerank[$i] - 1) / 2) / $fstudents[$i] * 100;

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

    $mod_grade_arr[0] += $thistimerank * $ftime[$i];
    $time_arr[0] += $ftime[$i];

    switch ($fsubject[$i]) {
        case "ko":
            $kor_mod[0] += $thistimerank * $ftime[$i];
            $kor_time[0] += $ftime[$i];
            break;
        case "ma":
            $mat_mod[0] += $thistimerank * $ftime[$i];
            $mat_time[0] += $ftime[$i];
            break;
        case "en":
            $eng_mod[0] += $thistimerank * $ftime[$i];
            $eng_time[0] += $ftime[$i];
            break;
        case "so":
            $soc_mod[0] += $thistimerank * $ftime[$i];
            $soc_time[0] += $ftime[$i];
            break;
        case "sc":
            $sci_mod[0] += $thistimerank * $ftime[$i];
            $sci_time[0] += $ftime[$i];
            break;
    }
}

for ($i = 0; $i < $slen; $i++) {
    $percent = ($srank[$i] + ($ssamerank[$i] - 1) / 2) / $sstudents[$i] * 100;

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

    $mod_grade_arr[1] += $thistimerank * $stime[$i];
    $time_arr[1] += $stime[$i];

    switch ($ssubject[$i]) {
        case "ko":
            $kor_mod[1] += $thistimerank * $stime[$i];
            $kor_time[1] += $stime[$i];
            break;
        case "ma":
            $mat_mod[1] += $thistimerank * $stime[$i];
            $mat_time[1] += $stime[$i];
            break;
        case "en":
            $eng_mod[1] += $thistimerank * $stime[$i];
            $eng_time[1] += $stime[$i];
            break;
        case "so":
            $soc_mod[1] += $thistimerank * $stime[$i];
            $soc_time[1] += $stime[$i];
            break;
        case "sc":
            $sci_mod[1] += $thistimerank * $stime[$i];
            $sci_time[1] += $stime[$i];
            break;
    }
}

for ($i = 0; $i < $tlen; $i++) {
    $percent = ($trank[$i] + ($tsamerank[$i] - 1) / 2) / $tstudents[$i] * 100;

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

    $mod_grade_arr[2] += $thistimerank * $ttime[$i];
    $time_arr[2] += $ttime[$i];

    switch ($tsubject[$i]) {
        case "ko":
            $kor_mod[2] += $thistimerank * $ttime[$i];
            $kor_time[2] += $ttime[$i];
            break;
        case "ma":
            $mat_mod[2] += $thistimerank * $ttime[$i];
            $mat_time[2] += $ttime[$i];
            break;
        case "en":
            $eng_mod[2] += $thistimerank * $ttime[$i];
            $eng_time[2] += $ttime[$i];
            break;
        case "so":
            $soc_mod[2] += $thistimerank * $ttime[$i];
            $soc_time[2] += $ttime[$i];
            break;
        case "sc":
            $sci_mod[2] += $thistimerank * $ttime[$i];
            $sci_time[2] += $ttime[$i];
            break;
    }
}

$kor_mod_sum = $kor_mod[0] + $kor_mod[1] + $kor_mod[2];
$mat_mod_sum = $mat_mod[0] + $mat_mod[1] + $mat_mod[2];
$eng_mod_sum = $eng_mod[0] + $eng_mod[1] + $eng_mod[2];
$soc_mod_sum = $soc_mod[0] + $soc_mod[1] + $soc_mod[2];
$sci_mod_sum = $sci_mod[0] + $sci_mod[1] + $sci_mod[2];

$kor_time_sum = $kor_time[0] + $kor_time[1] + $kor_time[2];
$mat_time_sum = $mat_time[0] + $mat_time[1] + $mat_time[2];
$eng_time_sum = $eng_time[0] + $eng_time[1] + $eng_time[2];
$soc_time_sum = $soc_time[0] + $soc_time[1] + $soc_time[2];
$sci_time_sum = $sci_time[0] + $sci_time[1] + $sci_time[2];

$simple_avg = ($mod_grade_arr[0] + $mod_grade_arr[1] + $mod_grade_arr[2]) / ($time_arr[0] + $time_arr[1] + $time_arr[2]);

if ($flen != 0) {
    $favg = round($mod_grade_arr[0] / $time_arr[0], 1);
} else {
    $favg = 0;
}
if ($slen != 0) {
    $savg = round($mod_grade_arr[1] / $time_arr[1], 1);
} else {
    $savg = 0;
}
if ($tlen != 0) {
    $tavg = round($mod_grade_arr[2] / $time_arr[2], 1);
} else {
    $tavg = 0;
}

if ($kor_time_sum + $mat_time_sum + $eng_time_sum + $soc_time_sum != 0) {
    $KMESO = ($kor_mod_sum + $mat_mod_sum + $eng_mod_sum + $soc_mod_sum) / ($kor_time_sum + $mat_time_sum + $eng_time_sum + $soc_time_sum);
} else {
    $KMESO = 0;
}

if ($kor_time_sum + $mat_time_sum + $eng_time_sum + $sci_time_sum != 0) {
    $KMESC = ($kor_mod_sum + $mat_mod_sum + $eng_mod_sum + $sci_mod_sum) / ($kor_time_sum + $mat_time_sum + $eng_time_sum + $sci_time_sum);
} else {
    $KMESC = 0;
}

if ($kor_time_sum + $eng_time_sum + $soc_time_sum != 0) {
    $KESO = ($kor_mod_sum + $eng_mod_sum + $soc_mod_sum) / ($kor_time_sum + $eng_time_sum + $soc_time_sum);
} else {
    $KESO = 0;
}

if ($kor_time_sum + $mat_time_sum + $sci_time_sum != 0) {
    $KMSC = ($kor_mod_sum + $mat_mod_sum + $sci_mod_sum) / ($kor_time_sum + $mat_time_sum + $sci_time_sum);
} else {
    $KMSC = 0;
}
