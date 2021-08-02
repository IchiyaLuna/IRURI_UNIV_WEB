<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["dept-location-select"];
    $gender = $_POST["dept-gender-radio"];
    $type = $_POST["dept-type-radio"];

    $deptwant = $_POST["deptsel"];

    $first = $_POST["dept-first"];
    $second = $_POST["dept-first"];
    $third = $_POST["dept-first"];

    $sushi = array($first, $second, $third);

    $year = $_POST["dept-yearsel"];
    $month = $_POST["dept-monthsel"];

    $korean_type = $_POST["dept-korean-type"];
    $math_type = $_POST["dept-math-type"];
    $english_type = $_POST["dept-english-type"];
    $history_type = $_POST["dept-history-type"];
    $selectA_type = $_POST["dept-selectA-type"];
    $selectB_type = $_POST["dept-selectB-type"];
    $foreign_type = $_POST["dept-foreignlang-type"];

    $korean_score = $_POST["dept-korean-score"];
    $math_score = $_POST["dept-math-score"];
    $english_score = $_POST["dept-english-score"];
    $history_score = $_POST["dept-history-score"];
    $selectA_score = $_POST["dept-selectA-score"];
    $selectB_score = $_POST["dept-selectB-score"];
    $foreign_score = $_POST["dept-foreignlang-score"];
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

    if ($grade != 0) $count++;
    $simple_avg += $grade;
}

$simple_avg /= $count;

require "./module/avg_functions.php";

$white = white($sushi);
$yellow = yellow($sushi);
$blue = blue($sushi);
$purple = purple($sushi);

require "./module/dept_load.php";

$sushi_result_list = array();

foreach ($dept_list as $dept) {

    $gap = 0;

    if ($gender == "남") {
        if (strpos($dept['name'], "여대") !== false) {
            continue;
        }
    }

    switch ($dept['method']) {
        case 0:
            $gap = round($dept['avg'] - $white, 3);
            $this_time_myavg = round($white, 3);
            break;
        case 1:
            $gap = round($dept['avg'] - $yellow, 3);
            $this_time_myavg = round($gray, 3);
            break;
        case 2:
            $gap = round($dept['avg'] - $blue, 3);
            $this_time_myavg = round($yellow, 3);
            break;
        case 3:
            $gap = round($dept['avg'] - $purple, 3);
            $this_time_myavg = round($light_yellow, 3);
            break;
        default:
            $gap = -1;
            break;
    }

    $this_time_result = array($dept['name'], $dept['ca'], $dept['dept'], $dept['low'], $dept['high'], $dept['avg'], $this_time_myavg, $gap);
    array_push($sushi_result_list, $this_time_result);
}

foreach ((array) $sushi_result_list as $key => $value) {

    $sort[$key] = $value[7];
}

array_multisort($sort, SORT_ASC, $sushi_result_list);

$sushi_final_result = array();

foreach ($sushi_result_list as $data) {
    if ($data[6] < $data[4]) $posi = 0;
    elseif ($data[7] > 0) $posi = 1;
    elseif ($data[6] > $data[3]) $posi = 3;
    else $posi = 2;

    $arr_to_push = array($posi, $data[0], $data[1], $data[2], $data[5], $data[6]);
    array_push($sushi_final_result, $arr_to_push);
}

if ($year != -1) {
    require "./module/jungshi_load.php";
    require "./module/jungshi_functions.php";

    $jungshi_result_list = array();
} else {

    $percentile = -1;
}
