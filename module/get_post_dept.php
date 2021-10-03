<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["dept-location-select"];
    $gender = $_POST["dept-gender-radio"];
    $type = $_POST["dept-type-radio"];

    $deptwant = $_POST["category"];

    $first = $_POST["dept-first"];
    $second = $_POST["dept-second"];
    $third = $_POST["dept-third"];

    $sushi = array($first, $second, $third);

    $year = $_POST["dept-year"];
    $month = $_POST["dept-month"];

    $korean_type = $_POST["dept-korean-type"];
    $math_type = $_POST["dept-math-type"];
    $english_type = $_POST["dept-english-type"];
    $selectA_type = $_POST["dept-selectA-type"];
    $selectB_type = $_POST["dept-selectB-type"];
    $foreign_type = $_POST["dept-foreignlang-type"];

    $korean_score = 0;
    $math_score = 0;
    $english_score = 0;
    $history_score = 0;
    $selectA_score = 0;
    $selectB_score = 0;
    $foreign_score = 0;

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

require "./module/dept_load.php";

$simple_avg = 0;
$count = 0;

foreach ($sushi as $grade) {

    if ($grade != 0) $count++;
    $simple_avg += $grade;
}

if ($simple_avg != 0) {
    $simple_avg /= $count;

    require "./module/avg_functions.php";

    $white = white($sushi);
    $yellow = yellow($sushi);
    $blue = blue($sushi);
    $purple = purple($sushi);



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
                $this_time_myavg = round($yellow, 3);
                break;
            case 2:
                $gap = round($dept['avg'] - $blue, 3);
                $this_time_myavg = round($blue, 3);
                break;
            case 3:
                $gap = round($dept['avg'] - $purple, 3);
                $this_time_myavg = round($purple, 3);
                break;
            default:
                $gap = -1;
                break;
        }

        $this_time_result = array($dept['code'], $dept['name'], $dept['ca'], $dept['dept'], $dept['low'], $dept['high'], $dept['avg'], $this_time_myavg, $gap, $dept['tag'], $dept['cacode']);
        array_push($sushi_result_list, $this_time_result);
    }

    foreach ((array) $sushi_result_list as $key => $value) {

        $sort[$key] = $value[8];
    }

    array_multisort($sort, SORT_ASC, $sushi_result_list);

    $sushi_final_result = array();

    $isHakjong = false;
    $isGyogwa = false;

    foreach ($sushi_result_list as $data) {
        if ($data[7] < $data[5]) $posi = 0;
        elseif ($data[8] > 0) $posi = 1;
        elseif ($data[7] > $data[4]) $posi = 3;
        else $posi = 2;

        if ($isHakjong == false) {
            if ($data[10] == 1) {
                $isHakjong = true;
            }
        }

        if ($isGyogwa == false) {
            if ($data[10] == 2) {
                $isGyogwa = true;
            }
        }

        $arr_to_push = array($posi, $data[1], $data[2], $data[3], $data[6], $data[7], $data[8], 'possible' => 1, 'tag' => $data[9], 'cacode' => $data[10]);
        array_push($sushi_final_result, $arr_to_push);
    }

    $sort = array();

    foreach ((array) $sushi_final_result as $key => $value) {

        $sort[$key] = $value[0] - 0.1 * $value[6];
    }

    array_multisort($sort, SORT_DESC, $sushi_final_result);
}

if ($year != -1) {
    require "./module/jungshi_load.php";
    require "./module/jungshi_functions.php";

    $jungshi_result_list = array();

    foreach ($dept_list as $dept) {

        $gap = 0;

        if ($gender == "남") {
            if (strpos($dept['name'], "여대") !== false) {
                continue;
            }
        }

        $gap = $percentile - $dept['jungshi'];
        $this_time_result = array($dept['name'], $dept['ca'], $dept['dept'], $dept['jungshi'], $percentile, $gap);
        array_push($jungshi_result_list, $this_time_result);
    }

    $sort = array();

    foreach ((array) $jungshi_result_list as $key => $value) {

        $sort[$key] = $value[5];
    }

    array_multisort($sort, SORT_ASC, $jungshi_result_list);

    $jungshi_final_result = array();

    foreach ($jungshi_result_list as $data) {
        if ($data[5] > 2.0) $posi = 0;
        elseif ($data[5] > 0) $posi = 1;
        elseif ($data[5] > -1.0) $posi = 2;
        else $posi = 3;

        $arr_to_push = array($posi, $data[0], $data[1], $data[2], $data[3], $data[4]);
        array_push($jungshi_final_result, $arr_to_push);
    }

    $sort = array();

    foreach ((array) $jungshi_final_result as $key => $value) {

        $sort[$key] = $value[0] + 0.01 * $value[4];
    }

    array_multisort($sort, SORT_DESC, $jungshi_final_result);
} else {

    $percentile = -1;
}

require "./module/dept_log.php";
