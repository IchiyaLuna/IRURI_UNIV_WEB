<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subject_1 = $_POST['subject'];
    $rank_1 = $_POST['rank'];
    $samerank_1 = $_POST['samerank'];
    $students_1 = $_POST['students'];
    $time_1 = $_POST['time'];
}

$subjects_1 = array();

$modified_grade_1_a = 0;
$total_time_1_a = 0;
$modified_grade_1_b = 0;
$total_time_1_b = 0;
$modified_grade_1_c = 0;
$total_time_1_c = 0;
$modified_grade_1_d = 0;
$total_time_1_d = 0;
$modified_grade_1_e = 0;
$total_time_1_e = 0;

for ($i = 0; $i < sizeof($subject_1); $i++) {

    $percent_1 = ($rank_1[$i] + ($samerank_1[$i] - 1) / 2) / $students_1[$i] * 100;

    if ($percent_1 <= 4.0) $thistimerank_1 = 1;
    elseif ($percent_1 <= 11.0) $thistimerank_1 = 2;
    elseif ($percent_1 <= 23.0) $thistimerank_1 = 3;
    elseif ($percent_1 <= 40.0) $thistimerank_1 = 4;
    elseif ($percent_1 <= 60.0) $thistimerank_1 = 5;
    elseif ($percent_1 <= 77.0) $thistimerank_1 = 6;
    elseif ($percent_1 <= 89.0) $thistimerank_1 = 7;
    elseif ($percent_1 <= 96.0) $thistimerank_1 = 8;
    elseif ($percent_1 <= 100.0) $thistimerank_1 = 9;
    else $thistimerank_1 = 10;

    $arrtopush_1 = array($subject_1[$i], $rank_1[$i], $samerank_1[$i], $students_1[$i], $time_1[$i], $thistimerank_1);
    array_push($subjects_1, $arrtopush_1);

    $modified_grade_1_a += $thistimerank_1 * $time_1[$i];
    $total_time_1_a += $time_1[$i];
}

for ($i = 0; $i < sizeof($subject_1); $i++) {

    $percent_1 = ($rank_1[$i] + ($samerank_1[$i] - 1) / 2) / $students_1[$i] * 100;

    if ($percent_1 <= 4.0) $thistimerank_1 = 1;
    elseif ($percent_1 <= 11.0) $thistimerank_1 = 2;
    elseif ($percent_1 <= 23.0) $thistimerank_1 = 3;
    elseif ($percent_1 <= 40.0) $thistimerank_1 = 4;
    elseif ($percent_1 <= 60.0) $thistimerank_1 = 5;
    elseif ($percent_1 <= 77.0) $thistimerank_1 = 6;
    elseif ($percent_1 <= 89.0) $thistimerank_1 = 7;
    elseif ($percent_1 <= 96.0) $thistimerank_1 = 8;
    elseif ($percent_1 <= 100.0) $thistimerank_1 = 9;
    else $thistimerank_1 = 10;

    $arrtopush_1 = array($subject_1[$i], $rank_1[$i], $samerank_1[$i], $students_1[$i], $time_1[$i], $thistimerank_1);
    array_push($subjects_1, $arrtopush_1);

    if($subject_1[$i]=="과학"){
        $time_1[$i]=0;
    }

    $modified_grade_1_b += $thistimerank_1 * $time_1[$i];
    $total_time_1_b += $time_1[$i];
}

for ($i = 0; $i < sizeof($subject_1); $i++) {

    $percent_1 = ($rank_1[$i] + ($samerank_1[$i] - 1) / 2) / $students_1[$i] * 100;

    if ($percent_1 <= 4.0) $thistimerank_1 = 1;
    elseif ($percent_1 <= 11.0) $thistimerank_1 = 2;
    elseif ($percent_1 <= 23.0) $thistimerank_1 = 3;
    elseif ($percent_1 <= 40.0) $thistimerank_1 = 4;
    elseif ($percent_1 <= 60.0) $thistimerank_1 = 5;
    elseif ($percent_1 <= 77.0) $thistimerank_1 = 6;
    elseif ($percent_1 <= 89.0) $thistimerank_1 = 7;
    elseif ($percent_1 <= 96.0) $thistimerank_1 = 8;
    elseif ($percent_1 <= 100.0) $thistimerank_1 = 9;
    else $thistimerank_1 = 10;

    $arrtopush_1 = array($subject_1[$i], $rank_1[$i], $samerank_1[$i], $students_1[$i], $time_1[$i], $thistimerank_1);
    array_push($subjects_1, $arrtopush_1);

    if($subject_1[$i]=="사회"){
        $time_1[$i]=0;
    }

    $modified_grade_1_c += $thistimerank_1 * $time_1[$i];
    $total_time_1_c += $time_1[$i];
}

for ($i = 0; $i < sizeof($subject_1); $i++) {

    $percent_1 = ($rank_1[$i] + ($samerank_1[$i] - 1) / 2) / $students_1[$i] * 100;

    if ($percent_1 <= 4.0) $thistimerank_1 = 1;
    elseif ($percent_1 <= 11.0) $thistimerank_1 = 2;
    elseif ($percent_1 <= 23.0) $thistimerank_1 = 3;
    elseif ($percent_1 <= 40.0) $thistimerank_1 = 4;
    elseif ($percent_1 <= 60.0) $thistimerank_1 = 5;
    elseif ($percent_1 <= 77.0) $thistimerank_1 = 6;
    elseif ($percent_1 <= 89.0) $thistimerank_1 = 7;
    elseif ($percent_1 <= 96.0) $thistimerank_1 = 8;
    elseif ($percent_1 <= 100.0) $thistimerank_1 = 9;
    else $thistimerank_1 = 10;

    $arrtopush_1 = array($subject_1[$i], $rank_1[$i], $samerank_1[$i], $students_1[$i], $time_1[$i], $thistimerank_1);
    array_push($subjects_1, $arrtopush_1);

    if($subject_1[$i]=="과학" || $subject_1[$i]=="수학"){
        $time_1[$i]=0;
    }

    $modified_grade_1_d += $thistimerank_1 * $time_1[$i];
    $total_time_1_d += $time_1[$i];
}

for ($i = 0; $i < sizeof($subject_1); $i++) {

    $percent_1 = ($rank_1[$i] + ($samerank_1[$i] - 1) / 2) / $students_1[$i] * 100;

    if ($percent_1 <= 4.0) $thistimerank_1 = 1;
    elseif ($percent_1 <= 11.0) $thistimerank_1 = 2;
    elseif ($percent_1 <= 23.0) $thistimerank_1 = 3;
    elseif ($percent_1 <= 40.0) $thistimerank_1 = 4;
    elseif ($percent_1 <= 60.0) $thistimerank_1 = 5;
    elseif ($percent_1 <= 77.0) $thistimerank_1 = 6;
    elseif ($percent_1 <= 89.0) $thistimerank_1 = 7;
    elseif ($percent_1 <= 96.0) $thistimerank_1 = 8;
    elseif ($percent_1 <= 100.0) $thistimerank_1 = 9;
    else $thistimerank_1 = 10;

    $arrtopush_1 = array($subject_1[$i], $rank_1[$i], $samerank_1[$i], $students_1[$i], $time_1[$i], $thistimerank_1);
    array_push($subjects_1, $arrtopush_1);

    if($subject_1[$i]=="사회" || $subject_1[$i]=="영어"){
        $time_1[$i]=0;
    }

    $modified_grade_1_e += $thistimerank_1 * $time_1[$i];
    $total_time_1_e += $time_1[$i];
}

$final_grade_1_a = round($modified_grade_1_a / $total_time_1_a, 1); //1학년 전과목
$final_grade_1_b = round($modified_grade_1_b / $total_time_1_b, 1); //1학년 국수영사
$final_grade_1_c = round($modified_grade_1_c / $total_time_1_c, 1); //1학년 국수영과
$final_grade_1_d = round($modified_grade_1_d / $total_time_1_d, 1); //1학년 국영사
$final_grade_1_e = round($modified_grade_1_e / $total_time_1_e, 1); //1학년 국수과

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subject_2 = $_POST['subject'];
    $rank_2 = $_POST['rank'];
    $samerank_2 = $_POST['samerank'];
    $students_2 = $_POST['students'];
    $time_2 = $_POST['time'];
}

$subjects_2 = array();

$modified_grade_2_a = 0;
$total_time_2_a = 0;
$modified_grade_2_b = 0;
$total_time_2_b = 0;
$modified_grade_2_c = 0;
$total_time_2_c = 0;
$modified_grade_2_d = 0;
$total_time_2_d = 0;
$modified_grade_2_e = 0;
$total_time_2_e = 0;

for ($i = 0; $i < sizeof($subject_2); $i++) {

    $percent_2 = ($rank_2[$i] + ($samerank_2[$i] - 1) / 2) / $students_2[$i] * 100;

    if ($percent_2 <= 4.0) $thistimerank_2 = 1;
    elseif ($percent_2 <= 11.0) $thistimerank_2 = 2;
    elseif ($percent_2 <= 23.0) $thistimerank_2 = 3;
    elseif ($percent_2 <= 40.0) $thistimerank_2 = 4;
    elseif ($percent_2 <= 60.0) $thistimerank_2 = 5;
    elseif ($percent_2 <= 77.0) $thistimerank_2 = 6;
    elseif ($percent_2 <= 89.0) $thistimerank_2 = 7;
    elseif ($percent_2 <= 96.0) $thistimerank_2 = 8;
    elseif ($percent_2 <= 100.0) $thistimerank_2 = 9;
    else $thistimerank_2 = 10;

    $arrtopush_2 = array($subject_2[$i], $rank_2[$i], $samerank_2[$i], $students_2[$i], $time_2[$i], $thistimerank_2);
    array_push($subjects_2, $arrtopush_2);

    $modified_grade_2_a += $thistimerank_2 * $time_2[$i];
    $total_time_2_a += $time_2[$i];
}

for ($i = 0; $i < sizeof($subject_2); $i++) {

    $percent_2 = ($rank_2[$i] + ($samerank_2[$i] - 1) / 2) / $students_2[$i] * 100;

    if ($percent_2 <= 4.0) $thistimerank_2 = 1;
    elseif ($percent_2 <= 11.0) $thistimerank_2 = 2;
    elseif ($percent_2 <= 23.0) $thistimerank_2 = 3;
    elseif ($percent_2 <= 40.0) $thistimerank_2 = 4;
    elseif ($percent_2 <= 60.0) $thistimerank_2 = 5;
    elseif ($percent_2 <= 77.0) $thistimerank_2 = 6;
    elseif ($percent_2 <= 89.0) $thistimerank_2 = 7;
    elseif ($percent_2 <= 96.0) $thistimerank_2 = 8;
    elseif ($percent_2 <= 100.0) $thistimerank_2 = 9;
    else $thistimerank_2 = 10;

    $arrtopush_2 = array($subject_2[$i], $rank_2[$i], $samerank_2[$i], $students_2[$i], $time_2[$i], $thistimerank_2);
    array_push($subjects_2, $arrtopush_2);

    if($subject_2[$i]=="과학"){
        $time_2[$i]=0;
    }

    $modified_grade_2_a += $thistimerank_2 * $time_2[$i];
    $total_time_2_a += $time_2[$i];
}

for ($i = 0; $i < sizeof($subject_2); $i++) {

    $percent_2 = ($rank_2[$i] + ($samerank_2[$i] - 1) / 2) / $students_2[$i] * 100;

    if ($percent_2 <= 4.0) $thistimerank_2 = 1;
    elseif ($percent_2 <= 11.0) $thistimerank_2 = 2;
    elseif ($percent_2 <= 23.0) $thistimerank_2 = 3;
    elseif ($percent_2 <= 40.0) $thistimerank_2 = 4;
    elseif ($percent_2 <= 60.0) $thistimerank_2 = 5;
    elseif ($percent_2 <= 77.0) $thistimerank_2 = 6;
    elseif ($percent_2 <= 89.0) $thistimerank_2 = 7;
    elseif ($percent_2 <= 96.0) $thistimerank_2 = 8;
    elseif ($percent_2 <= 100.0) $thistimerank_2 = 9;
    else $thistimerank_2 = 10;

    $arrtopush_2 = array($subject_2[$i], $rank_2[$i], $samerank_2[$i], $students_2[$i], $time_2[$i], $thistimerank_2);
    array_push($subjects_2, $arrtopush_2);

    if($subject_2[$i]=="사회"){
        $time_2[$i]=0;
    }

    $modified_grade_2_a += $thistimerank_2 * $time_2[$i];
    $total_time_2_a += $time_2[$i];
}

for ($i = 0; $i < sizeof($subject_2); $i++) {

    $percent_2 = ($rank_2[$i] + ($samerank_2[$i] - 1) / 2) / $students_2[$i] * 100;

    if ($percent_2 <= 4.0) $thistimerank_2 = 1;
    elseif ($percent_2 <= 11.0) $thistimerank_2 = 2;
    elseif ($percent_2 <= 23.0) $thistimerank_2 = 3;
    elseif ($percent_2 <= 40.0) $thistimerank_2 = 4;
    elseif ($percent_2 <= 60.0) $thistimerank_2 = 5;
    elseif ($percent_2 <= 77.0) $thistimerank_2 = 6;
    elseif ($percent_2 <= 89.0) $thistimerank_2 = 7;
    elseif ($percent_2 <= 96.0) $thistimerank_2 = 8;
    elseif ($percent_2 <= 100.0) $thistimerank_2 = 9;
    else $thistimerank_2 = 10;

    $arrtopush_2 = array($subject_2[$i], $rank_2[$i], $samerank_2[$i], $students_2[$i], $time_2[$i], $thistimerank_2);
    array_push($subjects_2, $arrtopush_2);

    if($subject_2[$i]=="과학" || $subject_2[$i]=="수학"){
        $time_2[$i]=0;
    }

    $modified_grade_2_a += $thistimerank_2 * $time_2[$i];
    $total_time_2_a += $time_2[$i];
}

for ($i = 0; $i < sizeof($subject_2); $i++) {

    $percent_2 = ($rank_2[$i] + ($samerank_2[$i] - 1) / 2) / $students_2[$i] * 100;

    if ($percent_2 <= 4.0) $thistimerank_2 = 1;
    elseif ($percent_2 <= 11.0) $thistimerank_2 = 2;
    elseif ($percent_2 <= 23.0) $thistimerank_2 = 3;
    elseif ($percent_2 <= 40.0) $thistimerank_2 = 4;
    elseif ($percent_2 <= 60.0) $thistimerank_2 = 5;
    elseif ($percent_2 <= 77.0) $thistimerank_2 = 6;
    elseif ($percent_2 <= 89.0) $thistimerank_2 = 7;
    elseif ($percent_2 <= 96.0) $thistimerank_2 = 8;
    elseif ($percent_2 <= 100.0) $thistimerank_2 = 9;
    else $thistimerank_2 = 10;

    $arrtopush_2 = array($subject_2[$i], $rank_2[$i], $samerank_2[$i], $students_2[$i], $time_2[$i], $thistimerank_2);
    array_push($subjects_2, $arrtopush_2);

    if($subject_2[$i]=="사회" || $subject_2[$i]=="영어"){
        $time_2[$i]=0;
    }

    $modified_grade_2_a += $thistimerank_2 * $time_2[$i];
    $total_time_2_a += $time_2[$i];
}

$final_grade_2_a = round($modified_grade_2_a / $total_time_2_a, 1); //2학년 전과목
$final_grade_2_b = round($modified_grade_2_b / $total_time_2_b, 1); //2학년 국수영사
$final_grade_2_c = round($modified_grade_2_c / $total_time_2_c, 1); //2학년 국수영과
$final_grade_2_d = round($modified_grade_2_d / $total_time_2_d, 1); //2학년 국영사
$final_grade_2_e = round($modified_grade_2_e / $total_time_2_e, 1); //2학년 국수과

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subject_3 = $_POST['subject'];
    $rank_3 = $_POST['rank'];
    $samerank_3 = $_POST['samerank'];
    $students_3 = $_POST['students'];
    $time_3 = $_POST['time'];
}

$subjects_3 = array();

$modified_grade_3_a = 0;
$total_time_3_a = 0;
$modified_grade_3_b = 0;
$total_time_3_b = 0;
$modified_grade_3_c = 0;
$total_time_3_c = 0;
$modified_grade_3_d = 0;
$total_time_3_d = 0;
$modified_grade_3_e = 0;
$total_time_3_e = 0;

for ($i = 0; $i < sizeof($subject_3); $i++) {

    $percent_3 = ($rank_3[$i] + ($samerank_3[$i] - 1) / 2) / $students_3[$i] * 100;

    if ($percent_3 <= 4.0) $thistimerank_3 = 1;
    elseif ($percent_3 <= 11.0) $thistimerank_3 = 2;
    elseif ($percent_3 <= 23.0) $thistimerank_3 = 3;
    elseif ($percent_3 <= 40.0) $thistimerank_3 = 4;
    elseif ($percent_3 <= 60.0) $thistimerank_3 = 5;
    elseif ($percent_3 <= 77.0) $thistimerank_3 = 6;
    elseif ($percent_3 <= 89.0) $thistimerank_3 = 7;
    elseif ($percent_3 <= 96.0) $thistimerank_3 = 8;
    elseif ($percent_3 <= 100.0) $thistimerank_3 = 9;
    else $thistimerank_3 = 10;

    $arrtopush_3 = array($subject_3[$i], $rank_3[$i], $samerank_3[$i], $students_3[$i], $time_3[$i], $thistimerank_3);
    array_push($subjects_3, $arrtopush_3);

    $modified_grade_3_a += $thistimerank_3 * $time_3[$i];
    $total_time_3_a += $time_3[$i];
}

for ($i = 0; $i < sizeof($subject_3); $i++) {

    $percent_3 = ($rank_3[$i] + ($samerank_3[$i] - 1) / 2) / $students_3[$i] * 100;

    if ($percent_3 <= 4.0) $thistimerank_3 = 1;
    elseif ($percent_3 <= 11.0) $thistimerank_3 = 2;
    elseif ($percent_3 <= 23.0) $thistimerank_3 = 3;
    elseif ($percent_3 <= 40.0) $thistimerank_3 = 4;
    elseif ($percent_3 <= 60.0) $thistimerank_3 = 5;
    elseif ($percent_3 <= 77.0) $thistimerank_3 = 6;
    elseif ($percent_3 <= 89.0) $thistimerank_3 = 7;
    elseif ($percent_3 <= 96.0) $thistimerank_3 = 8;
    elseif ($percent_3 <= 100.0) $thistimerank_3 = 9;
    else $thistimerank_3 = 10;

    $arrtopush_3 = array($subject_3[$i], $rank_3[$i], $samerank_3[$i], $students_3[$i], $time_3[$i], $thistimerank_3);
    array_push($subjects_3, $arrtopush_3);

    if($subject_3[$i]=="과학"){
        $time_3[$i]=0;
    }

    $modified_grade_3_a += $thistimerank_3 * $time_3[$i];
    $total_time_3_a += $time_3[$i];
}

for ($i = 0; $i < sizeof($subject_3); $i++) {

    $percent_3 = ($rank_3[$i] + ($samerank_3[$i] - 1) / 2) / $students_3[$i] * 100;

    if ($percent_3 <= 4.0) $thistimerank_3 = 1;
    elseif ($percent_3 <= 11.0) $thistimerank_3 = 2;
    elseif ($percent_3 <= 23.0) $thistimerank_3 = 3;
    elseif ($percent_3 <= 40.0) $thistimerank_3 = 4;
    elseif ($percent_3 <= 60.0) $thistimerank_3 = 5;
    elseif ($percent_3 <= 77.0) $thistimerank_3 = 6;
    elseif ($percent_3 <= 89.0) $thistimerank_3 = 7;
    elseif ($percent_3 <= 96.0) $thistimerank_3 = 8;
    elseif ($percent_3 <= 100.0) $thistimerank_3 = 9;
    else $thistimerank_3 = 10;

    $arrtopush_3 = array($subject_3[$i], $rank_3[$i], $samerank_3[$i], $students_3[$i], $time_3[$i], $thistimerank_3);
    array_push($subjects_3, $arrtopush_3);

    if($subject_3[$i]=="사회"){
        $time_3[$i]=0;
    }

    $modified_grade_3_a += $thistimerank_3 * $time_3[$i];
    $total_time_3_a += $time_3[$i];
}

for ($i = 0; $i < sizeof($subject_3); $i++) {

    $percent_3 = ($rank_3[$i] + ($samerank_3[$i] - 1) / 2) / $students_3[$i] * 100;

    if ($percent_3 <= 4.0) $thistimerank_3 = 1;
    elseif ($percent_3 <= 11.0) $thistimerank_3 = 2;
    elseif ($percent_3 <= 23.0) $thistimerank_3 = 3;
    elseif ($percent_3 <= 40.0) $thistimerank_3 = 4;
    elseif ($percent_3 <= 60.0) $thistimerank_3 = 5;
    elseif ($percent_3 <= 77.0) $thistimerank_3 = 6;
    elseif ($percent_3 <= 89.0) $thistimerank_3 = 7;
    elseif ($percent_3 <= 96.0) $thistimerank_3 = 8;
    elseif ($percent_3 <= 100.0) $thistimerank_3 = 9;
    else $thistimerank_3 = 10;

    $arrtopush_3 = array($subject_3[$i], $rank_3[$i], $samerank_3[$i], $students_3[$i], $time_3[$i], $thistimerank_3);
    array_push($subjects_3, $arrtopush_3);

    if($subject_3[$i]=="과학" || $subject_3[$i]=="수학"){
        $time_3[$i]=0;
    }

    $modified_grade_3_a += $thistimerank_3 * $time_3[$i];
    $total_time_3_a += $time_3[$i];
}

for ($i = 0; $i < sizeof($subject_3); $i++) {

    $percent_3 = ($rank_3[$i] + ($samerank_3[$i] - 1) / 2) / $students_3[$i] * 100;

    if ($percent_3 <= 4.0) $thistimerank_3 = 1;
    elseif ($percent_3 <= 11.0) $thistimerank_3 = 2;
    elseif ($percent_3 <= 23.0) $thistimerank_3 = 3;
    elseif ($percent_3 <= 40.0) $thistimerank_3 = 4;
    elseif ($percent_3 <= 60.0) $thistimerank_3 = 5;
    elseif ($percent_3 <= 77.0) $thistimerank_3 = 6;
    elseif ($percent_3 <= 89.0) $thistimerank_3 = 7;
    elseif ($percent_3 <= 96.0) $thistimerank_3 = 8;
    elseif ($percent_3 <= 100.0) $thistimerank_3 = 9;
    else $thistimerank_3 = 10;

    $arrtopush_3 = array($subject_3[$i], $rank_3[$i], $samerank_3[$i], $students_3[$i], $time_3[$i], $thistimerank_3);
    array_push($subjects_3, $arrtopush_3);

    if($subject_3[$i]=="사회" || $subject_3[$i]=="영어"){
        $time_3[$i]=0;
    }

    $modified_grade_3_a += $thistimerank_3 * $time_3[$i];
    $total_time_3_a += $time_3[$i];
}

$final_grade_3_a = round($modified_grade_3_a / $total_time_3_a, 1); //3학년 전과목
$final_grade_3_b = round($modified_grade_3_b / $total_time_3_b, 1); //3학년 국수영사
$final_grade_3_c = round($modified_grade_3_c / $total_time_3_c, 1); //3학년 국수영과
$final_grade_3_d = round($modified_grade_3_d / $total_time_3_d, 1); //3학년 국영사
$final_grade_3_e = round($modified_grade_3_e / $total_time_3_e, 1); //3학년 국수과

if($final_grade_1_a != 0 && $final_grade_2_a != 0 && $final_grade_3_a != 0){
    $overall_grade_a = round($modified_grade_1_a + $modified_grade_2_a + $modified_grade_3_a / 3, 1);                 //100%
    $overall_grade_b = round($modified_grade_1_a * 3 + $modified_grade_2_a * 3 + $modified_grade_3_a * 4 / 10, 1);    //3:3:4
    $overall_grade_c = round($modified_grade_1_a * 2 + $modified_grade_2_a * 3 + $modified_grade_3_a * 5 / 10, 1);    //2:3:5
}


//코드를 짜긴 했는데 웹에서 학년별로 나누어 받을 때 ($_POST 부분) 어떻게 바꾸어야 할지 몰라서 구냥 변수 이름만 바꿔놨음ㅜㅜ 