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

    if ($grade !== 0) $count++;
    $simple_avg += $grade;
}

$simple_avg /= $count;

include "./module/dept_load.php";

$result_list = array();

foreach ($dept_list as $dept) {

    $gap = 0;

    if ($gender == "남") {
        if (strpos($dept['name'], "여대") !== false) {
            continue;
        }
    }

    $this_time_myavg = round($simple_avg, 3);
    $gap = round($dept['avg'] - $this_time_myavg, 3);

    $this_time_result = array($dept['name'], $dept['low'], $dept['high'], $dept['avg'], $this_time_myavg, $gap);
    array_push($result_list, $this_time_result);
}

foreach ((array) $result_list as $key => $value) {

    $sort[$key] = $value[5];
}

array_multisort($sort, SORT_ASC, $result_list);

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