<?php

function count_arr($arr)
{
    $count = 0;

    foreach ($arr as $value) {
        if ($value == 0) {
            continue;
        }
        $count++;
    }

    return $count;
}

function getarravg($arr_1, $arr_2, $arr_3)
{
    $arr_all = $arr_1 + $arr_2 + $arr_3;

    return array_sum($arr_all) / count_arr($arr_all);
}

function white($arr_1, $arr_2, $arr_3)
{

    return getarravg($arr_1, $arr_2, $arr_3);
}

function gray($arr_1, $arr_2, $arr_3)
{
    global $type;

    $lit_arr = array(4, 5);
    $sci_arr = array(3, 5);

    if ($type == "인문") {
        foreach ($lit_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    } else if ($type == "자연") {
        foreach ($sci_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    }

    return getarravg($arr_1, $arr_2, $arr_3);
}

function yellow($arr_1, $arr_2, $arr_3)
{
    global $type;

    $lit_arr = array(4);
    $sci_arr = array(3, 5);

    if ($type == "인문") {
        foreach ($lit_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    } else if ($type == "자연") {
        foreach ($sci_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    }

    return getarravg($arr_1, $arr_2, $arr_3);
}

function light_yellow($arr_1, $arr_2, $arr_3)
{
    global $type;

    $lit_arr = array(4);
    $sci_arr = array(3);

    if ($type == "인문") {
        foreach ($lit_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    } else if ($type == "자연") {
        foreach ($sci_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    }

    return getarravg($arr_1, $arr_2, $arr_3);
}

function green($arr_1, $arr_2, $arr_3)
{
    $arr_1[5] = 0;
    $arr_2[5] = 0;
    $arr_3[5] = 0;

    return getarravg($arr_1, $arr_2, $arr_3);
}

function beige($arr_1, $arr_2, $arr_3)
{
    global $type;

    $lit_arr = array(5);
    $sci_arr = array(3, 5);

    if ($type == "인문") {
        foreach ($lit_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    } else if ($type == "자연") {
        foreach ($sci_arr as $index) {
            $arr_1[$index] = 0;
            $arr_2[$index] = 0;
            $arr_3[$index] = 0;
        }
    }

    return getarravg($arr_1, $arr_2, $arr_3);
}
