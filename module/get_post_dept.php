<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["dept-location-select"];
    $gender = $_POST["dept-gender-radio"];
    $type = $_POST["dept-type-radio"];

    $deptwant = $_POST["deptsel"];

    $first = $_POST["dept-first"];
    $second = $_POST["dept-second"];
    $third = $_POST["dept-third"];

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

    $this_time_result = array($dept['code'], $dept['name'], $dept['ca'], $dept['dept'], $dept['low'], $dept['high'], $dept['avg'], $this_time_myavg, $gap, $dept['tag']);
    array_push($sushi_result_list, $this_time_result);
}

foreach ((array) $sushi_result_list as $key => $value) {

    $sort[$key] = $value[8];
}

array_multisort($sort, SORT_ASC, $sushi_result_list);

$sushi_final_result = array();

foreach ($sushi_result_list as $data) {
    if ($data[7] < $data[5]) $posi = 0;
    elseif ($data[8] > 0) $posi = 1;
    elseif ($data[7] > $data[4]) $posi = 3;
    else $posi = 2;

    $arr_to_push = array($posi, $data[1], $data[2], $data[3], $data[6], $data[7], $data[8], 'possible' => 1, 'tag' => $data[9]);
    array_push($sushi_final_result, $arr_to_push);
}

$sort = array();

foreach ((array) $sushi_final_result as $key => $value) {

    $sort[$key] = $value[0] - 0.1 * $value[6];
}

array_multisort($sort, SORT_DESC, $sushi_final_result);

if ($year != -1) {
    require "./module/jungshi_load.php";
    require "./module/jungshi_functions.php";

    function snu()
    {
        global $math_type;
        global $selectA_type;
        global $selectB_type;
        global $selectA;
        global $selectB;
        global $foreign_type;

        global $sushi_final_result;

        if ($selectA_type == "p2" || $selectA_type == "c2" || $selectA_type == "b2" || $selectA_type == "e2") {
            $crazy_1 = true;
        } else {
            $crazy_1 = false;
        }

        if ($selectB_type == "p2" || $selectB_type == "c2" || $selectB_type == "b2" || $selectB_type == "e2") {
            $crazy_2 = true;
        } else {
            $crazy_2 = false;
        }

        if ($math_type == "ps") {

            //코드2번
            echo "출력 리스트에서 서울대 자연 제거" . "<br>";
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 2) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {

            //코드2번
            echo "출력 리스트에서 서울대 자연 제거" . "<br>";
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 2) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($crazy_1 === false && $crazy_2 === false) {

            //코드2번
            echo "출력 리스트에서 서울대 자연 제거" . "<br>";
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 2) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($foreign_type == "na") {

            //코드1번
            echo "출력 리스트에서 서울대 인문 제거" . "<br>";
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 1) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function yu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2, $rank1 + $rank4, $rank2 + $rank4);
        $j = min($rank1 + $rank2, $rank2 + $rank4);

        if ($rank3 > 3) {
            echo "출력 리스트에서 연세대 제거" . "<br>";
            //코드3,4,5번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 3 || $dept['tag'] == 4 || $dept['tag'] == 5) {
                    $dept['possible'] = 0;
                }
            }
            return 0;
        }

        if ($i > 4) {
            echo "출력 리스트에서 연세대 인문 제거" . "<br>";
            //코드3번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 3) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 연세대 자연 제거" . "<br>";
            //코드4,5번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 4 || $dept['tag'] == 5) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 연세대 자연 제거" . "<br>";
            //코드4,5번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 4 || $dept['tag'] == 5) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($j > 5) {
            echo "출력 리스트에서 연세대 자연 제거" . "<br>";
            //코드4,5번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 4 || $dept['tag'] == 5) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($i != 2) {
            echo "출력 리스트에서 연세대 의예 제거" . "<br>";
            //코드5번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 5) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function ku($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $j = $rank1 + $rank2 + $rank3 + $rank4;

        if ($i > 5) {
            echo "출력 리스트에서 고려대 인문(학교추천) 제거" . "<br>";
            //코드6번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 6) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($j > 7) {
            echo "출력 리스트에서 고려대 인문(학업우수) 제거" . "<br>";
            //코드7번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 7) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($math_type == "ps") {
            echo "출력 리스트에서 고려대 자연 제거" . "<br>";
            //코드8,9,10,11,12번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 8 || $dept['tag'] == 9 || $dept['tag'] == 10 || $dept['tag'] == 11 || $dept['tag'] == 12) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 고려대 자연 제거" . "<br>";
            //코드8,9,10,11,12번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 8 || $dept['tag'] == 9 || $dept['tag'] == 10 || $dept['tag'] == 11 || $dept['tag'] == 12) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 6) {
                echo "출력 리스트에서 고려대 자연(학교추천) 제거" . "<br>";
                //코드9번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 9) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 8) {
                echo "출력 리스트에서 고려대 자연(학업우수)  제거" . "<br>";
                //코드10,11,12번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 10 || $dept['tag'] == 11 || $dept['tag'] == 12) {
                        $dept['possible'] = 0;
                    }
                }
            } else if ($j > 7) {
                echo "출력 리스트에서 고려대 반도체  제거" . "<br>";
                //코드11,12번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 11 || $dept['tag'] == 12) {
                        $dept['possible'] = 0;
                    }
                }
            } else if ($j > 5) {
                echo "출력 리스트에서 고려대 의예  제거" . "<br>";
                //코드12번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 12) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }
        return 0;
    }

    function khu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2, $rank3 + $rank1, $rank1 + $rank4, $rank3 + $rank2, $rank4 + $rank2, $rank3 + $rank4);

        if ($i > 5) {
            echo "출력 리스트에서 경희대 인문 제거" . "<br>";
            //코드13,14번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 13 || $dept['tag'] == 14) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($i > 4) {
            echo "출력 리스트에서 경희대 인문(한의예) 제거" . "<br>";
            //코드14번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 14) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 경희대 자연 제거" . "<br>";
            //코드15,16번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 15 || $dept['tag'] == 16) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 경희대 자연 제거" . "<br>";
            //코드15,16번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 15 || $dept['tag'] == 16) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 5) {
                echo "출력 리스트에서 경희대 자연 제거" . "<br>";
                //코드15,16번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 15 || $dept['tag'] == 16) {
                        $dept['possible'] = 0;
                    }
                }
            } else if ($i > 4) {
                echo "출력 리스트에서 경희대 의예  제거" . "<br>";
                //코드16번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 16) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function uos($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

        if ($i > 7) {
            echo "출력 리스트에서 시립대 인문 제거" . "<br>";
            //코드17번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 17) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 시립대 자연 제거" . "<br>";
            //코드18번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 18) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 시립대 자연 제거" . "<br>";
            //코드18번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 18) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($i > 7) {
            echo "출력 리스트에서 시립대 자연 제거" . "<br>";
            //코드18번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 18) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function hiu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

        if ($i > 8) {
            echo "출력 리스트에서 홍익대 인문(교과) 제거" . "<br>";
            //코드19번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 19) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($i > 7) {
            echo "출력 리스트에서 홍익대 인문(학종) 제거" . "<br>";
            //코드17번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 17) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 홍익대 자연 제거" . "<br>";
            //코드20,21번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 20 || $dept['tag'] == 21) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 홍익대 자연 제거" . "<br>";
            //코드20,21번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 20 || $dept['tag'] == 21) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 8) {
                echo "출력 리스트에서 홍익대 자연(학종) 제거" . "<br>";
                //코드20번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 20) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 9) {
                echo "출력 리스트에서 홍익대 자연(교과) 제거" . "<br>";
                //코드21번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 21) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function ehwa($rank1, $rank2, $rank3, $rank4)
    {
        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

        if ($i > 6) {
            echo "출력 리스트에서 이화여대 인문 제거" . "<br>";
            //코드22번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 22) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function sju($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
        $j = $rank1 + $rank2 + $rank3;

        if ($math_type == "ps") {
            echo "출력 리스트에서 세종대 자연 제거" . "<br>";
            //코드23,24번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 23 || $dept['tag'] == 24) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 세종대 자연 제거" . "<br>";
            //코드23,24번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 23 || $dept['tag'] == 24) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 6) {
                echo "출력 리스트에서 세종대 자연 제거" . "<br>";
                //코드23번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 23) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 9) {
                echo "출력 리스트에서 세종대 자연(시스템) 제거" . "<br>";
                //코드24번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 24) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function swu($rank1, $rank2, $rank3, $rank4)
    {
        global $sushi_final_result;

        $i = min($rank1 + $rank2, $rank2 + $rank4, $rank4 + $rank1);
        $j = min($rank3 + $rank1, $rank3 + $rank2, $rank3 + $rank4);

        if ($i > 7 && $j > 5) {
            echo "출력 리스트에서 서울여대 제거" . "<br>";
            //코드25번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 25) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function smu($rank1, $rank2, $rank3, $rank4)
    {
        global $sushi_final_result;

        $i = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);

        if ($i > 7) {
            echo "출력 리스트에서 상명대 제거" . "<br>";
            //코드26번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 26) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function cuk($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
        $j = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

        if ($i > 6) {
            echo "출력 리스트에서 가톨릭대 인문 제거" . "<br>";
            //코드27번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 27) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 가톨릭대 자연 제거" . "<br>";
            //코드28,29번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 28 || $dept['tag'] == 29) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 가톨릭대 자연 제거" . "<br>";
            //코드28,29번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 28 || $dept['tag'] == 29) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 7) {
                echo "출력 리스트에서 가톨릭대 자연 제거" . "<br>";
                //코드28번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 28) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 4) {
                echo "출력 리스트에서 가톨릭대 의예 제거" . "<br>";
                //코드29번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 29) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function knu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);

        if ($i > 11) {
            echo "출력 리스트에서 강원대 인문 제거" . "<br>";
            //코드31번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 31) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($i > 10) {
            echo "출력 리스트에서 강원대 인문 제거" . "<br>";
            //코드30번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 30) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($i > 9) {
            echo "출력 리스트에서 강원대 자연(간호) 제거" . "<br>";
            //코드34번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 34) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($i > 12) {
            echo "출력 리스트에서 강원대 자연 제거" . "<br>";
            //코드32번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 32) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 강원대 의예 제거" . "<br>";
            //코드33번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 33) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 강원대 의예 제거" . "<br>";
            //코드33번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 33) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($i > 5) {
            echo "출력 리스트에서 강원대 의예 제거" . "<br>";
            //코드33번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 33) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function kynu($rank1, $rank2, $rank3, $rank4)
    {
        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $j = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);

        if ($j > 8) {
            echo "출력 리스트에서 경북대 인문 제거" . "<br>";
            //코드35번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 35) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($j > 9) {
            echo "출력 리스트에서 경북대 자연 제거" . "<br>";
            //코드36번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 36) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($i > 3) {
            echo "출력 리스트에서 경북대 의예 제거" . "<br>";
            //코드37번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 37) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($i > 4) {
            echo "출력 리스트에서 경북대 치의예 제거" . "<br>";
            //코드38번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 38) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function gnu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $j = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4);


        if ($i > 13) {
            echo "출력 리스트에서 경상대 인문 제거" . "<br>";
            //코드39번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 39) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($selectA == "사회탐구" || $selectB == "사회탐구") {
            echo "출력 리스트에서 경상대 자연 제거" . "<br>";
            //코드40,41,42,43,44,45번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 40 || $dept['tag'] == 41 || $dept['tag'] == 42 || $dept['tag'] == 43 || $dept['tag'] == 44 || $dept['tag'] == 45) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 13) {
                echo "출력 리스트에서 경상대 자연 제거" . "<br>";
                //코드40번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 40) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 14) {
                echo "출력 리스트에서 경상대 자연 제거" . "<br>";
                //코드43번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 43) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 10) {
                echo "출력 리스트에서 경상대 자연 제거" . "<br>";
                //코드41번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 41) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 경상대 의예 제거" . "<br>";
            //코드42,44,45번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 42 || $dept['tag'] == 44 || $dept['tag'] == 45) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($j > 6) {
                echo "출력 리스트에서 경상대 의예 제거" . "<br>";
                //코드42번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 42) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 5) {
                echo "출력 리스트에서 경상대 의예 제거" . "<br>";
                //코드44번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 44) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 4) {
                echo "출력 리스트에서 경상대 의예 제거" . "<br>";
                //코드45번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 45) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function pnu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $j = min($rank1 + $rank2, $rank2 + $rank4, $rank3 + $rank2);

        if ($math_type == "ps") {
            echo "출력 리스트에서 부산대 자연 제거" . "<br>";
            //코드46,47,48번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 46 || $dept['tag'] == 47 || $dept['tag'] == 48) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 부산대 자연 제거" . "<br>";
            //코드46,47,48번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 46 || $dept['tag'] == 47 || $dept['tag'] == 48) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($j > 5) {
                echo "출력 리스트에서 부산대 자연 제거" . "<br>";
                //코드46번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 46) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 6) {
                echo "출력 리스트에서 부산대 자연 제거" . "<br>";
                //코드47번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 47) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 4) {
                echo "출력 리스트에서 부산대 의예 제거" . "<br>";
                //코드48번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 48) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function cnu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = $rank1 + $rank4 + $rank3;
        $j = $rank4 + $rank2 + $rank3;

        if ($i > 11) {
            echo "출력 리스트에서 충남대 인문 제거" . "<br>";
            //코드49번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 49) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($i > 9) {
            echo "출력 리스트에서 충남대 인문 제거" . "<br>";
            //코드50번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 50) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($i > 8) {
            echo "출력 리스트에서 충남대 인문 제거" . "<br>";
            //코드51번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 51) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 충남대 자연 제거" . "<br>";
            //코드52,53,54,55,56,57번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 52 || $dept['tag'] == 53 || $dept['tag'] == 54 || $dept['tag'] == 55 || $dept['tag'] == 56 || $dept['tag'] == 57) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($j > 12) {
            echo "출력 리스트에서 충남대 자연 제거" . "<br>";
            //코드52번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 52) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($math_type == "ps") {
            echo "출력 리스트에서 충남대 자연 제거" . "<br>";
            //코드53,54,55,56,57번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 53 || $dept['tag'] == 54 || $dept['tag'] == 55 || $dept['tag'] == 56 || $dept['tag'] == 57) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($j > 7) {
                echo "출력 리스트에서 충남대 수의예 제거" . "<br>";
                //코드53번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 53) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 6) {
                echo "출력 리스트에서 충남대 수의예 제거" . "<br>";
                //코드54번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 54) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 12) {
                echo "출력 리스트에서 충남대 자연 제거" . "<br>";
                //코드55번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 55) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 10) {
                echo "출력 리스트에서 충남대 자연 제거" . "<br>";
                //코드56번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 56) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 9) {
                echo "출력 리스트에서 충남대 자연 제거" . "<br>";
                //코드57번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 57) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function jnu($rank1, $rank2, $rank3, $rank4)
    {
        global $sushi_final_result;

        $i = $rank2 + $rank3 + $rank4;
        $j = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
        $k = min($rank2 + $rank3 + $rank4, $rank2 + $rank1 + $rank4, $rank2 + $rank3 + $rank1);

        if ($i > 10) {
            echo "출력 리스트에서 제주대 자연 제거" . "<br>";
            //코드58번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 58) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($j > 10) {
            echo "출력 리스트에서 제주대 자연 제거" . "<br>";
            //코드59번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 59) {
                    $dept['possible'] = 0;
                }
            }
        }

        if ($k > 7) {
            echo "출력 리스트에서 제주대 자연 제거" . "<br>";
            //코드60번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 60) {
                    $dept['possible'] = 0;
                }
            }
        }

        return 0;
    }

    function chnu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $j = $rank1 + $rank2 + $rank3 + $rank4;
        $k = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);

        //echo $i."<br>";
        //echo $j."<br>";

        if ($math_type == "ps") {
            echo "출력 리스트에서 전남대 자연 제거" . "<br>";
            //코드61,62,63번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 61 || $dept['tag'] == 62 || $dept['tag'] == 63) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 전남대 자연 제거" . "<br>";
            //코드61,62,63번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 61 || $dept['tag'] == 62 || $dept['tag'] == 63) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($i > 11) {
                echo "출력 리스트에서 전남대 자연 제거" . "<br>";
                //코드61번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 61) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($k > 12) {
                echo "출력 리스트에서 전남대 자연 제거" . "<br>";
                //코드62번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 62) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 6) {
                echo "출력 리스트에서 전남대 치의예 제거" . "<br>";
                //코드63번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 63) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function jbnu($rank1, $rank2, $rank3, $rank4)
    {
        global $math_type;
        global $selectA;
        global $selectB;

        global $sushi_final_result;

        $i = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $j = $rank1 + $rank2 + $rank3 + $rank4;

        if ($math_type == "ps") {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드64,65,66,67,68,69,70,71,72,73번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 64 || $dept['tag'] == 65 || $dept['tag'] == 66 || $dept['tag'] == 67 || $dept['tag'] == 68 || $dept['tag'] == 69 || $dept['tag'] == 70 || $dept['tag'] == 71 || $dept['tag'] == 72 || $dept['tag'] == 73) {
                    $dept['possible'] = 0;
                }
            }
        } else if ($selectA == "social" || $selectB == "social") {
            echo "출력 리스트에서 전북대 자연 제거" . "<br>";
            //코드64,65,66,67,68,69,70,71,72,73번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 64 || $dept['tag'] == 65 || $dept['tag'] == 66 || $dept['tag'] == 67 || $dept['tag'] == 68 || $dept['tag'] == 69 || $dept['tag'] == 70 || $dept['tag'] == 71 || $dept['tag'] == 72 || $dept['tag'] == 73) {
                    $dept['possible'] = 0;
                }
            }
        } else {
            if ($j > 7) {
                echo "출력 리스트에서 전북대 의예 제거" . "<br>";
                //코드64번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 64) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($j > 5) {
                echo "출력 리스트에서 전북대 의예 제거" . "<br>";
                //코드65번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 65) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 7) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드66번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 66) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 8) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드67번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 67) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 9) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드68번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 68) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 10) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드69번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 69) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 11) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드70번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 70) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 12) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드71번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 71) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 14) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드72번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 72) {
                        $dept['possible'] = 0;
                    }
                }
            }
            if ($i > 15) {
                echo "출력 리스트에서 전북대 자연 제거" . "<br>";
                //코드73번
                foreach ($sushi_final_result as $dept) {
                    if ($dept['tag'] == 73) {
                        $dept['possible'] = 0;
                    }
                }
            }
        }

        return 0;
    }

    function namuzi($rank1, $rank2, $rank3, $rank4)
    {
        global $sushi_final_result;

        $i = $rank1 + $rank2 + $rank3 + $rank4;
        $j = min($rank1 + $rank2 + $rank3, $rank1 + $rank2 + $rank4, $rank3 + $rank2 + $rank4, $rank1 + $rank3 + $rank4);
        $k = min($rank1 + $rank2, $rank3 + $rank1, $rank2 + $rank4, $rank3 + $rank2, $rank4 + $rank1, $rank3 + $rank4);
        $l = min($rank1, $rank2, $rank3, $rank4);

        if ($i > 9) {
            echo "출력 리스트에서 서울교대 제거" . "<br>";
            //코드74번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 74) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($j > 3) {
            echo "출력 리스트에서 가천대 의예 제거" . "<br>";
            //코드75번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 75) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($k > 2) {
            echo "출력 리스트에서 가천대 수의예 제거" . "<br>";
            //코드76번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 76) {
                    $dept['possible'] = 0;
                }
            }
        }
        if ($l > 5) {
            echo "출력 리스트에서 조선대 제거" . "<br>";
            //코드77번
            foreach ($sushi_final_result as $dept) {
                if ($dept['tag'] == 77) {
                    $dept['possible'] = 0;
                }
            }
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

    $jungshi_result_list = array();
} else {

    $percentile = -1;
}
