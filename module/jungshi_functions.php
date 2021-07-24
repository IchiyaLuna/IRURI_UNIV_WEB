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

if ($selectA_rank >= $selectB_rank)
    $select_rank = $selectB_rank;
else
    $select_rank = $selectA_rank;

if ($selectA_type == "p1" || $selectA_type == "c1" || $selectA_type == "b1" || $selectA_type == "e1" || $selectA_type == "p2" || $selectA_type == "c2" || $selectA_type == "b2" || $selectA_type == "e2") {
    $selectA = "science";
} else
    $selectA = "social";

if ($selectB_type == "p1" || $selectB_type == "c1" || $selectB_type == "b1" || $selectB_type == "e1" || $selectB_type == "p2" || $selectB_type == "c2" || $selectB_type == "b2" || $selectB_type == "e2") {
    $selectB = "science";
} else
    $selectB = "social";


echo "탐구 등급: " . $select_rank . "<br>";
echo "탐구1 : " . $selectA . "<br>";
echo "탐구2 : " . $selectB . "<br>";

function snu()
{
    global $math_type;
    global $selectA_type;
    global $selectB_type;
    global $selectA;
    global $selectB;
    global $foreign_type;

    if ($selectA_type == "p2" || $selectA_type == "c2" || $selectA_type == "b2" || $selectA_type == "e2") {
        $crazy_1 = true;
    } else
        $crazy_1 = false;

    if ($selectB_type == "p2" || $selectB_type == "c2" || $selectB_type == "b2" || $selectB_type == "e2") {
        $crazy_2 = true;
    } else
        $crazy_2 = false;

    if ($math_type == "ps") {

        //코드1번
        echo "출력 리스트에서 서울대 자연 제거" . "<br>";
    } else if ($selectA == "social" || $selectB == "social") {

        //코드1번
        echo "출력 리스트에서 서울대 자연 제거" . "<br>";
    } else if ($crazy_1 === false && $crazy_2 === false) {

        //코드1번
        echo "출력 리스트에서 서울대 자연 제거" . "<br>";
    }

    if ($foreign_type == "na") {

        //코드0번
        echo "출력 리스트에서 서울대 인문 제거" . "<br>";
    }

    return 0;
}

function yu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;


    $i = min($rank1 + $rank2, $rank1 + $rank4, $rank2 + $rank4);
    $j = min($rank1 + $rank2, $rank2 + $rank4);

    if ($rank3 > 3) {
        echo "출력 리스트에서 연세대 제거" . "<br>";
        //코드2,3,4번
        return 0;
    }

    if ($i > 4) {
        echo "출력 리스트에서 연세대 인문 제거" . "<br>";
        //코드2번
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 연세대 자연 제거" . "<br>";
        //코드3,4번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 연세대 자연 제거" . "<br>";
        //코드3,4번
    } else if ($j > 5) {
        echo "출력 리스트에서 연세대 자연 제거" . "<br>";
        //코드3,4번
    } else if ($i != 2) {
        echo "출력 리스트에서 연세대 의예 제거" . "<br>";
        //코드4번
    }

    return 0;
}

function ku($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $j = $rank1 + $rank2 + $rank3 + $rank4;

    if ($i > 5) {
        echo "출력 리스트에서 고려대 인문(학교추천) 제거" . "<br>";
        //코드6번
    }
    if ($j > 7) {
        echo "출력 리스트에서 고려대 인문(학업우수) 제거" . "<br>";
        //코드7번
    }
    if ($math_type == "ps") {
        echo "출력 리스트에서 고려대 자연 제거" . "<br>";
        //코드8,9,10,11,12번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 고려대 자연 제거" . "<br>";
        //코드8,9,10,11,12번
    } else {
        if ($i > 6) {
            echo "출력 리스트에서 고려대 자연(학교추천) 제거" . "<br>";
            //코드9번
        }
        if ($j > 8) {
            echo "출력 리스트에서 고려대 자연(학업우수)  제거" . "<br>";
            //코드10,11,12번
        } else if ($j > 7) {
            echo "출력 리스트에서 고려대 반도체  제거" . "<br>";
            //코드11,12번
        } else if ($j > 5) {
            echo "출력 리스트에서 고려대 의예  제거" . "<br>";
            //코드12번
        }
    }
    return 0;
}

function khu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;


    $i = min($rank1 + $rank2, $rank3 + $rank1, $rank1 + $rank4, $rank3 + $rank2, $rank4 + $rank2, $rank3 + $rank4);

    if ($i > 5) {
        echo "출력 리스트에서 경희대 인문 제거" . "<br>";
        //코드13,14번

    } else if ($i > 4) {
        echo "출력 리스트에서 경희대 인문(한의예) 제거" . "<br>";
        //코드14번
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 경희대 자연 제거" . "<br>";
        //코드15,16번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 경희대 자연 제거" . "<br>";
        //코드15,16번
    } else {
        if ($i > 5) {
            echo "출력 리스트에서 경희대 자연 제거" . "<br>";
            //코드15,16번
        } else if ($i > 4) {
            echo "출력 리스트에서 경희대 의예  제거" . "<br>";
            //코드16번
        }
    }

    return 0;
}

function uos($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

    if ($i > 7) {
        echo "출력 리스트에서 시립대 인문 제거" . "<br>";
        //코드17번

    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 시립대 자연 제거" . "<br>";
        //코드18번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 시립대 자연 제거" . "<br>";
        //코드18번
    } else if ($i > 7) {
        echo "출력 리스트에서 시립대 자연 제거" . "<br>";
        //코드18번
    }

    return 0;
}

function hiu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

    if ($i > 8) {
        echo "출력 리스트에서 홍익대 인문(교과) 제거" . "<br>";
        //코드19번
    }
    if ($i > 7) {
        echo "출력 리스트에서 홍익대 인문(학종) 제거" . "<br>";
        //코드17번
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 홍익대 자연 제거" . "<br>";
        //코드20,21번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 홍익대 자연 제거" . "<br>";
        //코드20,21번
    } else {
        if ($i > 8) {
            echo "출력 리스트에서 홍익대 자연(학종) 제거" . "<br>";
            //코드20번
        }
        if ($i > 9) {
            echo "출력 리스트에서 홍익대 자연(교과) 제거" . "<br>";
            //코드21번
        }
    }

    return 0;
}

function ehwa($rank1, $rank2, $rank3, $rank4)
{
    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

    if ($i > 6) {
        echo "출력 리스트에서 이화여대 인문 제거" . "<br>";
        //코드22번
    }

    return 0;
}

function sju($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;


    $i = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
    $j = $rank1 + $rank2 + $rank3;

    if ($math_type == "ps") {
        echo "출력 리스트에서 세종대 자연 제거" . "<br>";
        //코드23,24번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 세종대 자연 제거" . "<br>";
        //코드23,24번
    } else {
        if ($i > 6) {
            echo "출력 리스트에서 세종대 자연 제거" . "<br>";
            //코드23번
        }
        if ($j > 9) {
            echo "출력 리스트에서 세종대 자연(시스템) 제거" . "<br>";
            //코드24번
        }
    }

    return 0;
}

function swu($rank1, $rank2, $rank3, $rank4)
{

    $i = min($rank1 + $rank2, $rank2 + $rank4, $rank4 + $rank1);
    $j = min($rank3 + $rank1, $rank3 + $rank2, $rank3 + $rank4);

    if ($i > 7 && $j > 5) {
        echo "출력 리스트에서 서울여대 제거" . "<br>";
        //코드25번
    }

    return 0;
}

function smu($rank1, $rank2, $rank3, $rank4)
{

    $i = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);

    if ($i > 7) {
        echo "출력 리스트에서 상명대 제거" . "<br>";
        //코드26번
    }

    return 0;
}

function cuk($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
    $j = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

    if ($i > 6) {
        echo "출력 리스트에서 가톨릭대 인문 제거" . "<br>";
        //코드27번
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 가톨릭대 자연 제거" . "<br>";
        //코드28,29번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 가톨릭대 자연 제거" . "<br>";
        //코드28,29번
    } else {
        if ($i > 7) {
            echo "출력 리스트에서 가톨릭대 자연 제거" . "<br>";
            //코드28번
        }
        if ($j > 4) {
            echo "출력 리스트에서 가톨릭대 의예 제거" . "<br>";
            //코드29번
        }
    }

    return 0;
}

function knu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

    if ($i > 11) {
        echo "출력 리스트에서 강원대 인문 제거" . "<br>";
        //코드31번
    }

    if ($i > 10) {
        echo "출력 리스트에서 강원대 인문 제거" . "<br>";
        //코드30번
    }

    if ($i > 9) {
        echo "출력 리스트에서 강원대 자연(간호) 제거" . "<br>";
        //코드34번
    }

    if ($i > 12) {
        echo "출력 리스트에서 강원대 자연 제거" . "<br>";
        //코드32번
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 강원대 의예 제거" . "<br>";
        //코드33번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 강원대 의예 제거" . "<br>";
        //코드33번
    } else if ($i > 5) {
        echo "출력 리스트에서 강원대 의예 제거" . "<br>";
        //코드33번
    }







    return 0;
}

function kynu($rank1, $rank2, $rank3, $rank4)
{

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $j = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);

    if ($j > 8) {
        echo "출력 리스트에서 경북대 인문 제거" . "<br>";
        //코드35번
    }

    if ($j > 9) {
        echo "출력 리스트에서 경북대 자연 제거" . "<br>";
        //코드36번
    }

    if ($i > 3) {
        echo "출력 리스트에서 경북대 의예 제거" . "<br>";
        //코드37번
    }

    if ($i > 4) {
        echo "출력 리스트에서 경북대 치의예 제거" . "<br>";
        //코드38번
    }

    return 0;
}

function gnu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $j = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4);


    if ($i > 13) {
        echo "출력 리스트에서 경상대 인문 제거" . "<br>";
        //코드39번
    }

    if ($selectA == "사회탐구" || $selectB == "사회탐구") {
        echo "출력 리스트에서 경상대 자연 제거" . "<br>";
        //코드40,41,42,43,44,45번
    } else {
        if ($i > 13) {
            echo "출력 리스트에서 경상대 자연 제거" . "<br>";
            //코드40번
        }
        if ($i > 14) {
            echo "출력 리스트에서 경상대 자연 제거" . "<br>";
            //코드43번
        }
        if ($i > 10) {
            echo "출력 리스트에서 경상대 자연 제거" . "<br>";
            //코드41번
        }
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 경상대 의예 제거" . "<br>";
        //코드42,44,45번
    } else {
        if ($j > 6) {
            echo "출력 리스트에서 경상대 의예 제거" . "<br>";
            //코드42번
        }
        if ($j > 5) {
            echo "출력 리스트에서 경상대 의예 제거" . "<br>";
            //코드44번
        }
        if ($j > 4) {
            echo "출력 리스트에서 경상대 의예 제거" . "<br>";
            //코드45번
        }
    }

    return 0;
}

function pnu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $j = min($rank1 + $rank2, $rank2 + $rank4, $rank3 + $rank2);

    //echo $i."<br>";
    //echo $j."<br>";



    if ($math_type == "ps") {
        echo "출력 리스트에서 부산대 자연 제거" . "<br>";
        //코드46,47,48번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 부산대 자연 제거" . "<br>";
        //코드46,47,48번
    } else {
        if ($j > 5) {
            echo "출력 리스트에서 부산대 자연 제거" . "<br>";
            //코드46번
        }
        if ($j > 6) {
            echo "출력 리스트에서 부산대 자연 제거" . "<br>";
            //코드47번
        }
        if ($i > 4) {
            echo "출력 리스트에서 부산대 의예 제거" . "<br>";
            //코드48번
        }
    }

    return 0;
}

function cnu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = $rank1 + $rank4 + $rank3;
    $j = $rank4 + $rank2 + $rank3;

    if ($i > 11) {
        echo "출력 리스트에서 충남대 인문 제거" . "<br>";
        //코드49번
    }
    if ($i > 9) {
        echo "출력 리스트에서 충남대 인문 제거" . "<br>";
        //코드50번
    }
    if ($i > 8) {
        echo "출력 리스트에서 충남대 인문 제거" . "<br>";
        //코드51번
    }

    if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 충남대 자연 제거" . "<br>";
        //코드52,53,54,55,56,57번
    } else if ($j > 12) {
        echo "출력 리스트에서 충남대 자연 제거" . "<br>";
        //코드52번
    }

    if ($math_type == "ps") {
        echo "출력 리스트에서 충남대 자연 제거" . "<br>";
        //코드53,54,55,56,57번
    } else {
        if ($j > 7) {
            echo "출력 리스트에서 충남대 수의예 제거" . "<br>";
            //코드53번
        }
        if ($j > 6) {
            echo "출력 리스트에서 충남대 수의예 제거" . "<br>";
            //코드54번
        }
        if ($j > 12) {
            echo "출력 리스트에서 충남대 자연 제거" . "<br>";
            //코드55번
        }
        if ($j > 10) {
            echo "출력 리스트에서 충남대 자연 제거" . "<br>";
            //코드56번
        }
        if ($j > 9) {
            echo "출력 리스트에서 충남대 자연 제거" . "<br>";
            //코드57번
        }
    }

    return 0;
}

function jnu($rank1, $rank2, $rank3, $rank4)
{
    $i = $rank2 + $rank3 + $rank4;
    $j = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
    $k = min($rank2 + $rank3 + $rank4, $rank2 + $rank1 + $rank4, $rank2 + $rank3 + $rank1);

    if ($i > 10) {
        echo "출력 리스트에서 제주대 자연 제거" . "<br>";
        //코드58번
    }

    if ($j > 10) {
        echo "출력 리스트에서 제주대 자연 제거" . "<br>";
        //코드59번
    }

    if ($k > 7) {
        echo "출력 리스트에서 제주대 자연 제거" . "<br>";
        //코드60번
    }

    return 0;
}

function chnu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $j = $rank1 + $rank2 + $rank3 + $rank4;
    $k = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);

    //echo $i."<br>";
    //echo $j."<br>";

    if ($math_type == "ps") {
        echo "출력 리스트에서 전남대 자연 제거" . "<br>";
        //코드61,62,63번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 전남대 자연 제거" . "<br>";
        //코드61,62,63번
    } else {
        if ($i > 11) {
            echo "출력 리스트에서 전남대 자연 제거" . "<br>";
            //코드61번
        }
        if ($k > 12) {
            echo "출력 리스트에서 전남대 자연 제거" . "<br>";
            //코드62번
        }
        if ($j > 6) {
            echo "출력 리스트에서 전남대 치의예 제거" . "<br>";
            //코드63번
        }
    }

    return 0;
}

function jbnu($rank1, $rank2, $rank3, $rank4)
{
    global $math_type;
    global $selectA;
    global $selectB;

    $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $j = $rank1 + $rank2 + $rank3 + $rank4;

    if ($math_type == "ps") {
        echo "출력 리스트에서 전북대 자연 제거" . "<br>";
        //코드64,65,66,67,68,69,70,71,72,73번
    } else if ($selectA == "social" || $selectB == "social") {
        echo "출력 리스트에서 전북대 자연 제거" . "<br>";
        //코드64,65,66,67,68,69,70,71,72,73번
    } else {
        if ($j > 7) {
            echo "출력 리스트에서 전북대 의예 제거" . "<br>";
            //코드64번
        }
        if ($j > 5) {
            echo "출력 리스트에서 전북대 의예 제거" . "<br>";
            //코드65번
        }
        if ($i > 7) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드66번
        }
        if ($i > 8) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드67번
        }
        if ($i > 9) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드68번
        }
        if ($i > 10) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드69번
        }
        if ($i > 11) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드70번
        }
        if ($i > 12) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드71번
        }
        if ($i > 14) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드72번
        }
        if ($i > 15) {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드73번
        }
    }

    return 0;
}

function namuzi($rank1, $rank2, $rank3, $rank4)
{
    $i = $rank1 + $rank2 + $rank3 + $rank4;
    $j = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
    $k = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
    $l = min($rank1, $rank2, $rank3, $rank4);

    if ($i > 9) {
        echo "출력 리스트에서 서울교대 제거" . "<br>";
        //코드74번
    }
    if ($j > 3) {
        echo "출력 리스트에서 가천대 의예 제거" . "<br>";
        //코드75번
    }
    if ($k > 2) {
        echo "출력 리스트에서 가천대 수의예 제거" . "<br>";
        //코드76번
    }
    if ($l > 5) {
        echo "출력 리스트에서 조선대 제거" . "<br>";
        //코드77번
    }

    return 0;
}

snu();
yu($korean_rank, $math_rank, $english_rank, $select_rank);
ku($korean_rank, $math_rank, $english_rank, $select_rank);
khu($korean_rank, $math_rank, $english_rank, $select_rank);
uos($korean_rank, $math_rank, $english_rank, $select_rank);
hiu($korean_rank, $math_rank, $english_rank, $select_rank);
ehwa($korean_rank, $math_rank, $english_rank, $select_rank);
sju($korean_rank, $math_rank, $english_rank, $select_rank);
swu($korean_rank, $math_rank, $english_rank, $select_rank);
smu($korean_rank, $math_rank, $english_rank, $select_rank);
cuk($korean_rank, $math_rank, $english_rank, $select_rank);
knu($korean_rank, $math_rank, $english_rank, $select_rank);
kynu($korean_rank, $math_rank, $english_rank, $select_rank);
gnu($korean_rank, $math_rank, $english_rank, $select_rank);
pnu($korean_rank, $math_rank, $english_rank, $select_rank);
cnu($korean_rank, $math_rank, $english_rank, $select_rank);
jnu($korean_rank, $math_rank, $english_rank, $select_rank);
chnu($korean_rank, $math_rank, $english_rank, $select_rank);
jbnu($korean_rank, $math_rank, $english_rank, $select_rank);
namuzi($korean_rank, $math_rank, $english_rank, $select_rank);
