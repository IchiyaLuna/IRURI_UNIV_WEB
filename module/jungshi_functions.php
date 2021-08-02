<?php
$korean_rank = 1;
$math_rank = 1;
$english_rank = 1;
$history_rank = 1;
$selectA_rank = 1;
$selectB_rank = 1;

require "./module/jungshi_load.php";

function standard_score_K($score)
{
    global $korean_type;
    global $korean_rank;
    global $subject_list;

    $grade_cut = array();

    if ($korean_type == "tw") {

        for ($i = 1; $i < 9; $i++) {
            $grade_cut[] = $subject_list['tw'][$i . 'g'];
        }

        for ($i = 0; $i < 8; $i++) {
            if ($score - $grade_cut[$i] >= 0) {
                break;
            } else {
                $korean_rank = $korean_rank + 1;
            }
        }
        return  20 * (($score - $subject_list['tw']['avg']) / $subject_list['tw']['devi']) + 100;
    } else if ($korean_type == "lm") {

        for ($i = 1; $i < 9; $i++) {
            $grade_cut[] = $subject_list['lm'][$i . 'g'];
        }

        for ($i = 0; $i < 8; $i++) {
            if ($score - $grade_cut[$i] >= 0) {
                break;
            } else {
                $korean_rank = $korean_rank + 1;
            }
        }
        return  20 * (($score - $subject_list['lm']['avg']) / $subject_list['lm']['devi']) + 100;
    }
}

function standard_score_M($score)
{
    global $math_type;
    global $math_rank;
    global $subject_list;

    $grade_cut = array();

    if ($math_type == "ps") {

        for ($i = 1; $i < 9; $i++) {
            $grade_cut[] = $subject_list['ps'][$i . 'g'];
        }

        for ($i = 0; $i < 8; $i++) {
            if ($score - $grade_cut[$i] >= 0) {
                break;
            } else {
                $math_rank = $math_rank + 1;
            }
        }
        return  20 * (($score -  $subject_list['ps']['avg']) / $subject_list['ps']['devi']) + 100;
    } else if ($math_type == "cl") {

        for ($i = 1; $i < 9; $i++) {
            $grade_cut[] = $subject_list['cl'][$i . 'g'];
        }

        for ($i = 0; $i < 8; $i++) {
            if ($score - $grade_cut[$i] >= 0) {
                break;
            } else {
                $math_rank = $math_rank + 1;
            }
        }
        return  20 * (($score - $subject_list['cl']['avg']) / $subject_list['cl']['devi']) + 100;
    } else if ($math_type == "ge") {

        for ($i = 1; $i < 9; $i++) {
            $grade_cut[] = $subject_list['ge'][$i . 'g'];
        }

        for ($i = 0; $i < 8; $i++) {
            if ($score - $grade_cut[$i] >= 0) {
                break;
            } else {
                $math_rank = $math_rank + 1;
            }
        }
        return  20 * (($score - $subject_list['ge']['avg']) / $subject_list['ge']['devi']) + 100;
    }
}


function standard_score_T_1($score)
{
    global $selectA_type;
    global $selectA_rank;
    global $subject_list;

    $grade_cut = array();

    switch ($selectA_type) {
        case "kg":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['kg'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['kg']['avg']) / $subject_list['kg']['devi']) + 50;
            break;
        case "wg":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['wg'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['wg']['avg']) / $subject_list['wg']['devi']) + 50;
            break;
        case "ah":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['ah'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['ah']['avg']) / $subject_list['ah']['devi']) + 50;
            break;
        case "wh":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['wh'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['wh']['avg']) / $subject_list['wh']['devi']) + 50;
            break;
        case "pl":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['pl'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['pl']['avg']) / $subject_list['pl']['devi']) + 50;
            break;
        case "en":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['en'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['en']['avg']) / $subject_list['en']['devi']) + 50;
            break;
        case "sc":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['sc'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['sc']['avg']) / $subject_list['sc']['devi']) + 50;
            break;
        case "le":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['le'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['le']['avg']) / $subject_list['le']['devi']) + 50;
            break;
        case "et":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['et'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['et']['avg']) / $subject_list['et']['devi']) + 50;
            break;
        case "p1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['p1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['p1']['avg']) / $subject_list['p1']['devi']) + 50;
            break;
        case "b1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['b1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['b1']['avg']) / $subject_list['b1']['devi']) + 50;
            break;
        case "c1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['c1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['c1']['avg']) / $subject_list['c1']['devi']) + 50;
            break;
        case "e1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['e1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['e1']['avg']) / $subject_list['e1']['devi']) + 50;
            break;
        case "p2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['p2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['p2']['avg']) / $subject_list['p2']['devi']) + 50;
            break;
        case "b2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['b2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['b2']['avg']) / $subject_list['b2']['devi']) + 50;
            break;
        case "c2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['c2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['c2']['avg']) / $subject_list['c2']['devi']) + 50;
            break;
        case "e2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['e2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectA_rank = $selectA_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['e2']['devi']) / $subject_list['e2']['devi']) + 50;
            break;

        default:
            return 0;
    }
}

function standard_score_T_2($score)
{
    global $selectB_type;
    global $selectB_rank;
    global $subject_list;

    $grade_cut = array();

    switch ($selectB_type) {
        case "kg":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['kg'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['kg']['avg']) / $subject_list['kg']['devi']) + 50;
            break;
        case "wg":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['wg'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['wg']['avg']) / $subject_list['wg']['devi']) + 50;
            break;
        case "ah":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['ah'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['ah']['avg']) / $subject_list['ah']['devi']) + 50;
            break;
        case "wh":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['wh'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['wh']['avg']) / $subject_list['wh']['devi']) + 50;
            break;
        case "pl":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['pl'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['pl']['avg']) / $subject_list['pl']['devi']) + 50;
            break;
        case "en":

            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['en'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['en']['avg']) / $subject_list['en']['devi']) + 50;
            break;
        case "sc":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['sc'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['sc']['avg']) / $subject_list['sc']['devi']) + 50;
            break;
        case "le":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['le'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['le']['avg']) / $subject_list['le']['devi']) + 50;
            break;
        case "et":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['et'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['et']['avg']) / $subject_list['et']['devi']) + 50;
            break;
        case "p1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['p1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['p1']['avg']) / $subject_list['p1']['devi']) + 50;
            break;
        case "b1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['b1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['b1']['avg']) / $subject_list['b1']['devi']) + 50;
            break;
        case "c1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['c1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['c1']['avg']) / $subject_list['c1']['devi']) + 50;
            break;
        case "e1":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['e1'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['e1']['avg']) / $subject_list['e1']['devi']) + 50;
            break;
        case "p2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['p2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['p2']['avg']) / $subject_list['p2']['devi']) + 50;
            break;
        case "b2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['b2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['b2']['avg']) / $subject_list['b2']['devi']) + 50;
            break;
        case "c2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['c2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['c2']['avg']) / $subject_list['c2']['devi']) + 50;
            break;
        case "e2":
            for ($i = 1; $i < 9; $i++) {
                $grade_cut[] = $subject_list['e2'][$i . 'g'];
            }

            for ($i = 0; $i < 8; $i++) {
                if ($score - $grade_cut[$i] >= 0) {
                    break;
                } else {
                    $selectB_rank = $selectB_rank + 1;
                }
            }
            return  10 * (($score - $subject_list['e2']['devi']) / $subject_list['e2']['devi']) + 50;
            break;

        default:
            return 0;
    }
}

function english_rank($score)
{
    global $english_rank;
    for ($i = 0; $i < 8; $i++) {
        if ($score - (90 - 10 * $i) >= 0) {
            break;
        } else {
            $english_rank = $english_rank + 1;
        }
    }
    return 0;
}

function history_rank($score)
{
    global $history_rank;
    for ($i = 0; $i < 8; $i++) {
        if ($score - (40 - 5 * $i) >= 0) {
            break;
        } else {
            $history_rank = $history_rank + 1;
        }
    }
    return 0;
}

function percentile($score)
{
    if ($score >= 350) {
        $base = 450 - $score;
        $height = $base * 10000 / 300;
        $area = $base * $height / 2;
        return 100 - ($area / 500000 * 100);
    }
    if ($score < 350) {
        $base = $score - 150;
        $height = $base * 10000 / 600;
        $area = $base * $height / 2;
        return 100 - ((500000 - $area) / 500000 * 100);
    }
}

$standard_score_sum = standard_score_K($korean_score) + standard_score_M($math_score) + standard_score_T_1($selectA_score) + standard_score_T_2($selectB_score);

english_rank($english_score);
history_rank($history_score);

$percentile = percentile($standard_score_sum);

if ($selectA_rank >= $selectB_rank) {
    $select_rank = $selectB_rank;
} else {
    $select_rank = $selectA_rank;
}

if ($selectA_type == "p1" || $selectA_type == "c1" || $selectA_type == "b1" || $selectA_type == "e1" || $selectA_type == "p2" || $selectA_type == "c2" || $selectA_type == "b2" || $selectA_type == "e2") {
    $selectA = "science";
} else {
    $selectA = "social";
}

if ($selectB_type == "p1" || $selectB_type == "c1" || $selectB_type == "b1" || $selectB_type == "e1" || $selectB_type == "p2" || $selectB_type == "c2" || $selectB_type == "b2" || $selectB_type == "e2") {
    $selectB = "science";
} else {
    $selectB = "social";
}
