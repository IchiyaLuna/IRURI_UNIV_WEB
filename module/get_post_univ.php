<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["univ-location-select"];
    $gender = $_POST["univ-gender-radio"];
    $type = $_POST["univ-type-radio"];

    $first = $_POST["univ-first"];
    $second = $_POST["univ-first"];
    $third = $_POST["univ-first"];

    $sushi = array($first, $second, $third);

    $korean_type = $_POST["univ-korean-type"];
    $math_type = $_POST["univ-math-type"];
    $english_type = $_POST["univ-english-type"];
    $history_type = $_POST["univ-history-type"];
    $selectA_type = $_POST["univ-selectA-type"];
    $selectB_type = $_POST["univ-selectB-type"];
    $foreign_type = $_POST["univ-foreignlang-type"];

    $korean_score = $_POST["univ-korean-score"];
    $math_score = $_POST["univ-math-score"];
    $english_score = $_POST["univ-english-score"];
    $history_score = $_POST["univ-history-score"];
    $selectA_score = $_POST["univ-selectA-score"];
    $selectB_score = $_POST["univ-selectB-score"];
    $foreign_score = $_POST["univ-foreignlang-score"];
} else {

    exit;
}

if ($gender == 1) {
    $gender = "남";
} elseif ($gender == 2) {
    $gender = "여";
}
if ($type == 1) {
    $type = "인문";
} elseif ($type == 2) {
    $type = "자연";
}

$simple_avg = 0;
$count = 0;

foreach ($sushi as $grade) {

    if ($grade !== 0) $count++;
    $simple_avg += $grade;
}

$simple_avg /= $count;
/*
$white = white($first, $second, $third);
$gray = gray($first, $second, $third);
$yellow = yellow($first, $second, $third);
$light_yellow = light_yellow($first, $second, $third);
$green = green($first, $second, $third);
$beige = beige($first, $second, $third);
*/
include "./module/univ_load.php";

$result_list = array();

foreach ($univ_list as $univ) {

    $gap = 0;

    if ($gender == "남") {
        if (strpos($univ['name'], "여대") !== false) {
            continue;
        }
    }

    $this_time_myavg = round($simple_avg, 3);
    $gap = round($univ['avg'] - $this_time_myavg, 3);
    /*
    switch ($univ['method']) {
        case 0:
            $gap = $univ['avg'] - $white;
            $this_time_myavg = round($white, 3);
            break;
        case 1:
            $gap = $univ['avg'] - $gray;
            $this_time_myavg = round($gray, 3);
            break;
        case 2:
            $gap = $univ['avg'] - $yellow;
            $this_time_myavg = round($yellow, 3);
            break;
        case 3:
            $gap = $univ['avg'] - $light_yellow;
            $this_time_myavg = round($light_yellow, 3);
            break;
        case 4:
            $gap = $univ['avg'] - $green;
            $this_time_myavg = round($green, 3);
            break;
        case 5:
            $gap = $univ['avg'] - $beige;
            $this_time_myavg = round($beige, 3);
            break;
        default:
            $gap = -1;
            break;
    }
    */
    $this_time_result = array($univ['name'], $univ['low'], $univ['high'], $univ['avg'], $this_time_myavg, $gap);
    array_push($result_list, $this_time_result);
}

foreach ((array) $result_list as $key => $value) {

    $sort[$key] = $value[5];
}

array_multisort($sort, SORT_ASC, $result_list);
/*
$index = 0;
$univ_count = sizeof($result_list);

foreach ($result_list as $vaule) {

    if ($vaule[5] < 0.0) {

        if ($index == $univ_count - 7) break;

        $index++;
        continue;
    } elseif ($value[5] >= 0.0) break;
}
*/
$final_result = array();

foreach ($result_list as $data) {
    if ($data[4] < $data[2]) $posi = 0;
    elseif ($data[5] > 0) $posi = 1;
    elseif ($data[4] > $data[1]) $posi = 3;
    else $posi = 2;

    $arr_to_push = array($posi, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
    array_push($final_result, $arr_to_push);
}

/*
if ($index < 3) {
    for ($i = 0; $i < 10; $i++) {
        if ($result_list[$i][4] < $result_list[$i][2]) $posi = 0;
        elseif ($result_list[$i][5] > 0) $posi = 1;
        elseif ($result_list[$i][4] > $result_list[$i][1]) $posi = 3;
        else $posi = 2;
        $arr_to_push = array($posi, $result_list[$i][0], $result_list[$i][1], $result_list[$i][2], $result_list[$i][3], $result_list[$i][4], round($result_list[$i][5], 3));
        array_push($final_result, $arr_to_push);
    }
} else {
    for ($i = $index - 3; $i < $index + 7; $i++) {
        if ($result_list[$i][4] < $result_list[$i][2]) $posi = 0;
        elseif ($result_list[$i][5] > 0) $posi = 1;
        elseif ($result_list[$i][4] > $result_list[$i][1]) $posi = 3;
        else $posi = 2;
        $arr_to_push = array($posi, $result_list[$i][0], $result_list[$i][1], $result_list[$i][2], $result_list[$i][3], $result_list[$i][4], round($result_list[$i][5], 3));
        array_push($final_result, $arr_to_push);
    }
}
*/