<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["univ-location-select"];
    $gender = $_POST["univ-gender-radio"];
    $type = $_POST["univ-type-radio"];

    $first = $_POST["univ-first"];
    $second = $_POST["univ-second"];
    $third = $_POST["univ-third"];

    $sushi = array($first, $second, $third);

    $year = $_POST["univ-yearsel"];
    $month = $_POST["univ-monthsel"];

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

    if ($grade !=  0) $count++;
    $simple_avg += $grade;
}

$simple_avg /= $count;

require "./module/avg_functions.php";

$white = white($sushi);
$yellow = yellow($sushi);
$blue = blue($sushi);
$purple = purple($sushi);

require "./module/univ_load.php";

$sushi_result_list = array();

foreach ($univ_list as $univ) {

    $gap = 0;

    if ($gender == "남") {
        if (strpos($univ['name'], "여대") !== false) {
            continue;
        }
    }

    switch ($univ['method']) {
        case 0:
            $gap = round($univ['avg'] - $white, 3);
            $this_time_myavg = round($white, 3);
            break;
        case 1:
            $gap = round($univ['avg'] - $yellow, 3);
            $this_time_myavg = round($yellow, 3);
            break;
        case 2:
            $gap = round($univ['avg'] - $blue, 3);
            $this_time_myavg = round($blue, 3);
            break;
        case 3:
            $gap = round($univ['avg'] - $purple, 3);
            $this_time_myavg = round($purple, 3);
            break;
        default:
            $gap = -1;
            $this_time_myavg = -1;
            break;
    }

    $this_time_result = array($univ['code'], $univ['name'], $univ['low'], $univ['high'], $univ['avg'], $this_time_myavg, $gap);
    array_push($sushi_result_list, $this_time_result);
}

foreach ((array) $sushi_result_list as $key => $value) {

    $sort[$key] = $value[6];
}

array_multisort($sort, SORT_ASC, $sushi_result_list);

$sushi_final_result = array();

foreach ($sushi_result_list as $data) {
    if ($data[5] < $data[3]) $posi = 0;
    elseif ($data[6] > 0) $posi = 1;
    elseif ($data[5] > $data[2]) $posi = 3;
    else $posi = 2;

    $arr_to_push = array($posi, $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[0]);
    array_push($sushi_final_result, $arr_to_push);
}

if ($year != -1) {
    require "./module/jungshi_load.php";
    require "./module/jungshi_functions.php";

    $jungshi_result_list = array();

    foreach ($univ_list as $univ) {

        $gap = 0;

        if ($gender == "남") {
            if (strpos($univ['name'], "여대") !== false) {
                continue;
            }
        }

        $gap = $percentile - $univ['percentile'];
        $this_time_result = array($univ['code'], $univ['name'], $univ['percentile'], $percentile, $gap);
        array_push($jungshi_result_list, $this_time_result);
    }

    foreach ((array) $jungshi_result_list as $key => $value) {

        $sort[$key] = $value[4];
    }

    array_multisort($sort, SORT_ASC, $jungshi_result_list);

    $jungshi_final_result = array();

    foreach ($jungshi_result_list as $data) {
        if ($data[4] > 2.0) $posi = 0;
        elseif ($data[4] > 0) $posi = 1;
        elseif ($data[4] > -1.0) $posi = 2;
        else $posi = 3;

        $arr_to_push = array($posi, $data[1], $data[2], $data[3], $data[4], $data[0]);
        array_push($jungshi_final_result, $arr_to_push);
    }
} else {

    $percentile = -1;
}
