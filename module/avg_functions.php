<?php

function white($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(1, 1, 1);

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $arr[$index] *= $offset;
            $valid += $offset;
        }
        $index++;
    }

    return array_sum($arr) / $valid;
}

function yellow($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(30, 35, 35);

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $arr[$index] *= $offset;
            $valid += $offset;
        }
        $index++;
    }

    return array_sum($arr) / $valid;
}

function blue($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(3, 4, 3);

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $arr[$index] *= $offset;
            $valid += $offset;
        }
        $index++;
    }

    return array_sum($arr) / $valid;
}

function purple($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(2, 4, 4);

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $arr[$index] *= $offset;
            $valid += $offset;
        }
        $index++;
    }

    return array_sum($arr) / $valid;
}
