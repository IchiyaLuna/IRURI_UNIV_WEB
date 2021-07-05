<!doctype html>
<html lang="ko" class="h-100">

<?php include "./module/avg_functions.php"; ?>

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

        if ($index == $univ_count - 4) break;

        $index++;
        continue;
    } elseif ($value[5] >= 0.0) break;
}

$final_result = array();

if ($index == 0) {
    for ($i = 0; $i < 5; $i++) {
        if ($result_list[$i][4] < $result_list[$i][2]) $posi = 0;
        elseif ($result_list[$i][5] > 0) $posi = 1;
        elseif ($result_list[$i][4] > $result_list[$i][1]) $posi = 3;
        else $posi = 2;
        $arr_to_push = array($posi, $result_list[$i][0], $result_list[$i][1], $result_list[$i][2], $result_list[$i][3], $result_list[$i][4], round($result_list[$i][5], 3));
        array_push($final_result, $arr_to_push);
    }
} else {
    for ($i = $index - 1; $i < $index + 4; $i++) {
        if ($result_list[$i][4] < $result_list[$i][2]) $posi = 0;
        elseif ($result_list[$i][5] > 0) $posi = 1;
        elseif ($result_list[$i][4] > $result_list[$i][1]) $posi = 3;
        else $posi = 2;
        $arr_to_push = array($posi, $result_list[$i][0], $result_list[$i][1], $result_list[$i][2], $result_list[$i][3], $result_list[$i][4], round($result_list[$i][5], 3));
        array_push($final_result, $arr_to_push);
    }
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <title>UNDER DEV - Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->

    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/result.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

    <!-- Begin page content -->

    <?php
    $cur_page = "index";
    require "./module/navbar.php";
    ?>

    <main class="flex-shrink-0">

        <div class="container-fluid px-4">

            <div class="row">

                <div class="content-main col-md-8 bg-light border rounded-3">

                    <h1>대학 합격 예측기</h1>

                    <p class="lead">학생의 기본 정보와 내신 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시 전형 추천 대학을 보여드립니다.</p>

                    <div class="card card-body">
                        <div class="result-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">성별</th>
                                        <th scope="col">계열</th>
                                        <th scope="col">단순 평균</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $type; ?></td>
                                        <td><?php echo round($simple_avg, 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="table-resposive">
                                                <table class="table mb-0 table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">합격예측</th>
                                                            <th scope="col">대학</th>
                                                            <th scope="col">등급 간 차이</th>
                                                            <th scope="col">합격 평균 등급</th>
                                                            <th scope="col">내 환산 등급</th>
                                                            <th scope="col">상세 정보</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($final_result as $result) {

                                                            switch ($result[0]) {
                                                                case 0:
                                                                    echo "<tr class='table-primary'>";
                                                                    echo "<td>" . "안정" . "</td>";
                                                                    break;
                                                                case 1:
                                                                    echo "<tr class='table-success'>";
                                                                    echo "<td>" . "가능" . "</td>";
                                                                    break;
                                                                case 2:
                                                                    echo "<tr class='table-warning'>";
                                                                    echo "<td>" . "불안" . "</td>";
                                                                    break;
                                                                case 3:
                                                                    echo "<tr class='table-danger'>";
                                                                    echo "<td>" . "위험" . "</td>";
                                                                    break;
                                                            }
                                                            echo "<td>" . $result[1] . "</td>";
                                                            echo "<td>" . $result[6] . "</td>";
                                                            echo "<td>" . $result[4] . "</td>";
                                                            echo "<td>" . $result[5] . "</td>";
                                                            echo "<td>" . "상세" . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="content-sidebar col-md-4 d-none d-md-block sticky-md-top">
                    <div class="card">
                        <div class="card-header">
                            <h5>결과 안내</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">예측 단계 안내</h5>
                            <p class="card-text">합격 예측은 아래 설명을 참고해주세요.</p>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">예측</th>
                                        <th scope="col">해석</th>
                                        <th scope="col">기준</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-primary">
                                        <td>안정</td>
                                        <td>최초 합격 가능성</td>
                                        <td>합격자 최고 성적 평균보다 위</td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>가능</td>
                                        <td>합격 가능성</td>
                                        <td>합격자 평균과의 차이가 양수</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>불안</td>
                                        <td>추가 합격 가능성</td>
                                        <td>합격자 평균과의 차이가 음수</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>위험</td>
                                        <td>합격 어려움</td>
                                        <td>합격자 최저 성적 평균보다 아래</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>


    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">&copy 2021. Ichiya Luna DEV VERSION</span>
        </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>