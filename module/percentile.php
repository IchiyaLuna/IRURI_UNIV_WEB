<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php
    $Korean = 84;
    $Korean_choice = "언론과매체";
    $Korean_rank = 1;
    $Math = 92;
    $Math_choice = "기하";
    $Math_rank = 1;
    $English = 89;
    $English_rank = 1;
    $History = 35;
    $History_rank = 1;
    $Tamgu_1 = 44;
    $Tamgu_2 = 43;
    $Tamgu_1_choice = "지구과학1";
    $Tamgu_2_choice = "화학1";
    $Tamgu_1_rank = 1;
    $Tamgu_2_rank = 1;
    $time = "3월";
    $Average_a = array(58.13, 59.85, 30.54, 50.58, 44.14, 22.35, 22.29, 18.03, 18.97, 18.69, 20.09, 23.81, 21.06, 18.07, 21.09, 23.16, 20.82, 23.33);
    $Deviation_a = array(19.86, 23.95, 18.89, 22.57, 24.49, 10.23, 10.99, 10.71, 10, 10.56, 11.48, 11.83, 9.87, 9.73, 10.98, 11.72, 10.79, 11.9);
    $standard_score_sum;
    $array = array(93, 85, 77, 69, 57, 45, 33, 24);

    function standard_score_K($score)
    {
        global $Average_a;
        global $Deviation_a;
        global $Korean_choice;
        global $Korean_rank;
        global $array;

        if ($Korean_choice == "화법과작문") {
            for ($i = 0; $i < 8; $i++) {
                if ($score - $array[$i] >= 0) {
                    break;
                } else {
                    $Korean_rank = $Korean_rank + 1;
                }
            }
            return  20 * (($score - $Average_a[0]) / $Deviation_a[0]) + 100;
        } else if ($Korean_choice == "언론과매체") {
            for ($i = 0; $i < 8; $i++) {
                if ($score - $array[$i] >= 0) {
                    break;
                } else {
                    $Korean_rank = $Korean_rank + 1;
                }
            }
            return  20 * (($score - $Average_a[1]) / $Deviation_a[1]) + 100;
        }
    }

    function standard_score_M($score)
    {
        global $Average_a;
        global $Deviation_a;
        global $Math_choice;
        global $Math_rank;
        global $array;

        if ($Math_choice == "확률과 통계") {
            for ($i = 0; $i < 8; $i++) {
                if ($score - $array[$i] >= 0) {
                    break;
                } else {
                    $Math_rank = $Math_rank + 1;
                }
            }
            return  20 * (($score - $Average_a[2]) / $Deviation_a[2]) + 100;
        } else if ($Math_choice == "미적분") {
            for ($i = 0; $i < 8; $i++) {
                if ($score - $array[$i] >= 0) {
                    break;
                } else {
                    $Math_rank = $Math_rank + 1;
                }
            }
            return  20 * (($score - $Average_a[3]) / $Deviation_a[3]) + 100;
        } else if ($Math_choice == "기하") {
            for ($i = 0; $i < 8; $i++) {
                if ($score - $array[$i] >= 0) {
                    break;
                } else {
                    $Math_rank = $Math_rank + 1;
                }
            }
            return  20 * (($score - $Average_a[4]) / $Deviation_a[4]) + 100;
        }
    }


    function standard_score_T_1($score)
    {
        global $Average_a;
        global $Deviation_a;
        global $Tamgu_1_choice;
        global $Tamgu_1_rank;
        global $array;


        switch ($Tamgu_1_choice) {
            case "한국지리":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[5]) / $Deviation_a[5]) + 50;
                break;
            case "세계지리":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[6]) / $Deviation_a[6]) + 50;
                break;
            case "동아시아사":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[7]) / $Deviation_a[7]) + 50;
                break;
            case "세계사":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[8]) / $Deviation_a[8]) + 50;
                break;
            case "정치와법":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[9]) / $Deviation_a[9]) + 50;
                break;
            case "경제":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[10]) / $Deviation_a[10]) + 50;
                break;
            case "사회문화":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[11]) / $Deviation_a[11]) + 50;
                break;
            case "생활과윤리":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[12]) / $Deviation_a[12]) + 50;
                break;
            case "윤리와사상":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[13]) / $Deviation_a[13]) + 50;
                break;
            case "물리학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[14]) / $Deviation_a[14]) + 50;
                break;
            case "생명과학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[15]) / $Deviation_a[15]) + 50;
                break;
            case "화학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[16]) / $Deviation_a[16]) + 50;
                break;
            case "지구과학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[17]) / $Deviation_a[17]) + 50;
                break;
            case "물리학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[14]) / $Deviation_a[14]) + 50;
                break;
            case "생명과학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[15]) / $Deviation_a[15]) + 50;
                break;
            case "화학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[16]) / $Deviation_a[16]) + 50;
                break;
            case "지구과학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_1_rank = $Tamgu_1_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[17]) / $Deviation_a[17]) + 50;
                break;

            default:
                return 0;
        }
    }

    function standard_score_T_2($score)
    {
        global $Average_a;
        global $Deviation_a;
        global $Tamgu_2_choice;
        global $Tamgu_2_rank;
        global $array;


        switch ($Tamgu_2_choice) {
            case "한국지리":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[5]) / $Deviation_a[5]) + 50;
                break;
            case "세계지리":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[6]) / $Deviation_a[6]) + 50;
                break;
            case "동아시아사":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[7]) / $Deviation_a[7]) + 50;
                break;
            case "세계사":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[8]) / $Deviation_a[8]) + 50;
                break;
            case "정치와법":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[9]) / $Deviation_a[9]) + 50;
                break;
            case "경제":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[10]) / $Deviation_a[10]) + 50;
                break;
            case "사회문화":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[11]) / $Deviation_a[11]) + 50;
                break;
            case "생활과윤리":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[12]) / $Deviation_a[12]) + 50;
                break;
            case "윤리와사상":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[13]) / $Deviation_a[13]) + 50;
                break;
            case "물리학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[14]) / $Deviation_a[14]) + 50;
                break;
            case "생명과학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[15]) / $Deviation_a[15]) + 50;
                break;
            case "화학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[16]) / $Deviation_a[16]) + 50;
                break;
            case "지구과학1":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[17]) / $Deviation_a[17]) + 50;
                break;
            case "물리학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[14]) / $Deviation_a[14]) + 50;
                break;
            case "생명과학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[15]) / $Deviation_a[15]) + 50;
                break;
            case "화학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[16]) / $Deviation_a[16]) + 50;
                break;
            case "지구과학2":
                for ($i = 0; $i < 8; $i++) {
                    if ($score - $array[$i] >= 0) {
                        break;
                    } else {
                        $Tamgu_2_rank = $Tamgu_2_rank + 1;
                    }
                }
                return  10 * (($score - $Average_a[17]) / $Deviation_a[17]) + 50;
                break;

            default:
                return 0;
        }
    }

    function english_rank($score)
    {
        global $English_rank;
        for ($i = 0; $i < 8; $i++) {
            if ($score - (90 - 10 * $i) >= 0) {
                break;
            } else {
                $English_rank = $English_rank + 1;
            }
        }
    }


    function history_rank($score)
    {
        global $History_rank;
        for ($i = 0; $i < 8; $i++) {
            if ($score - (40 - 5 * $i) >= 0) {
                break;
            } else {
                $History_rank = $History_rank + 1;
            }
        }
        return 0;
    }




    //echo standard_score_K($Korean)."<br>";
    //echo standard_score_M($Math)."<br>";
    //echo standard_score_T_1($Tamgu_1)."<br>";
    //echo standard_score_T_2($Tamgu_2)."<br>";

    $standard_score_sum = standard_score_K($Korean) + standard_score_M($Math) + standard_score_T_1($Tamgu_1) + standard_score_T_2($Tamgu_2);

    history_rank($History);
    english_rank($English);


    //echo $standard_score_sum."<br>";

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

    echo "백분위: " . percentile($standard_score_sum) . "<br>";

    echo "국어등급: " . $Korean_rank . "<br>";
    echo "수학등급: " . $Math_rank . "<br>";
    echo "영어등급: " . $English_rank . "<br>";
    echo "한국사등급: " . $History_rank . "<br>";
    echo "탐구1등급: " . $Tamgu_1_rank . "<br>";
    echo "탐구2등급: " . $Tamgu_2_rank . "<br>";









    ?>
</body>

</html>