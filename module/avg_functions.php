<?php

function white($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(1, 1, 1);
    $sum = 0;

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $sum += $arr[$index] * $offset;
            $valid += $offset;
        }
        $index++;
    }

    return $sum / $valid;
}

function yellow($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(30, 35, 35);
    $sum = 0;

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $sum += $arr[$index] * $offset;
            $valid += $offset;
        }
        $index++;
    }

    return $sum / $valid;
}

function blue($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(3, 4, 3);
    $sum = 0;

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $sum += $arr[$index] * $offset;
            $valid += $offset;
        }
        $index++;
    }

    return $sum / $valid;
}

function purple($arr)
{

    $valid = 0;
    $index = 0;
    $offsets = array(2, 4, 4);
    $sum = 0;

    foreach ($offsets as $offset) {
        if ($arr[$index] != 0) {
            $sum += $arr[$index] * $offset;
            $valid += $offset;
        }
        $index++;
    }

    return $sum / $valid;
}
