<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $gender = $_POST["gender-radio"];
    $type = $_POST["type-radio"];

    $first_korean = $_POST["first-korean"];
    $first_math =  $_POST["first-math"];
    $first_english =  $_POST["first-english"];
    $first_social =  $_POST["first-social"];
    $first_science =  $_POST["first-science"];
    $first_history =  $_POST["first-history"];

    $first = array($first_korean, $first_math, $first_english, $first_social, $first_science, $first_history);

    $second_korean = $_POST["second-korean"];
    $second_math =  $_POST["second-math"];
    $second_english =  $_POST["second-english"];
    $second_social =  $_POST["second-social"];
    $second_science =  $_POST["second-science"];
    $second_history =  $_POST["second-history"];

    $second = array($second_korean, $second_math, $second_english, $second_social, $second_science, $second_history);

    $third_korean = $_POST["third-korean"];
    $third_math = $_POST["third-math"];
    $third_english = $_POST["third-english"];
    $third_social = $_POST["third-social"];
    $third_science = $_POST["third-science"];
    $third_history = $_POST["third-history"];

    $third = array($third_korean, $third_math, $third_english, $third_social, $third_science, $third_history);
} else {

    $first = array(0, 0, 0, 0, 0, 0);
    $second = array(0, 0, 0, 0, 0, 0);
    $third = array(0, 0, 0, 0, 0, 0);
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

foreach ($first as $value) {
    if ($value == 0) {
        continue;
    }
    $simple_avg += $value;
    $count++;
}

foreach ($second as $value) {
    if ($value == 0) {
        continue;
    }
    $simple_avg += $value;
    $count++;
}

foreach ($third as $value) {
    if ($value == 0) {
        continue;
    }
    $simple_avg += $value;
    $count++;
}

$simple_avg /= $count;

$white = white($first, $second, $third);
$gray = gray($first, $second, $third);
$yellow = yellow($first, $second, $third);
$light_yellow = light_yellow($first, $second, $third);
$green = green($first, $second, $third);
$beige = beige($first, $second, $third);

include "./module/univ_load.php";

$result_list = array();

foreach ($univ_list as $univ) {

    $gap = 0;

    if ($gender == "남") {
        if (strpos($univ['name'], "여대") !== false) {
            continue;
        }
    }

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

    $this_time_result = array($univ['name'], $univ['low'], $univ['high'], $univ['avg'], $this_time_myavg, $gap);
    array_push($result_list, $this_time_result);
}

foreach ((array) $result_list as $key => $value) {

    $sort[$key] = $value[5];
}

array_multisort($sort, SORT_ASC, $result_list);

$index = 0;
$univ_count = sizeof($result_list);

foreach ($result_list as $vaule) {

    if ($vaule[5] < 0.0) {

        if ($index == $univ_count - 7) break;

        $index++;
        continue;
    } elseif ($value[5] >= 0.0) break;
}

$final_result = array();

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
