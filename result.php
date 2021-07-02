<!doctype html>
<html lang="ko" class="h-100">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender-radio"];
    $type = $_POST["type-radio"];

    $first_korean = $_POST["first-korean"];
    $first_math =  $_POST["first-math"];
    $first_english =  $_POST["first-english"];
    $first_history =  $_POST["first-history"];
    $first_social =  $_POST["first-social"];
    $first_science =  $_POST["first-science"];

    $first = array($first_korean, $first_math, $first_english, $first_history, $first_social, $first_science);

    $second_korean = $_POST["second-korean"];
    $second_math =  $_POST["second-math"];
    $second_english =  $_POST["second-english"];
    $second_history =  $_POST["second-history"];
    $second_social =  $_POST["second-social"];
    $second_science =  $_POST["second-science"];

    $second = array($second_korean, $second_math, $second_english, $second_history, $second_social, $second_science);

    $third_korean = $_POST["third-korean"];
    $third_math = $_POST["third-math"];
    $third_english = $_POST["third-english"];
    $third_history = $_POST["third-history"];
    $third_social = $_POST["third-social"];
    $third_science = $_POST["third-science"];

    $third = array($third_korean, $third_math, $third_english, $third_history, $third_social, $third_science);
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

    <link href="main.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

    <!-- Begin page content -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="navbar-main">

        <div class="container-fluid">

            <a class="navbar-brand" href="https://workruri.akkyu.net/">이루리 테스트</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index">합격 예측기</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">성적 계산기</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" data-bs-toggle="dropdown" aria-expanded="false">기타</a>

                        <ul class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <li><a class="dropdown-item" href="#">안내</a></li>
                            <li><a class="dropdown-item" href="./login">관리자</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="flex-shrink-0">

        <div class="container-fluid px-4">

            <div class="row">

                <div class="content-main col-md-8 bg-light border rounded-3">

                    <h1>대학 합격 예측기</h1>

                    <p class="lead">학생의 기본 정보와 내신 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시 전형 추천 대학을 보여드립니다.</p>

                    <div class="card card-body">

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
                                        <table class="table mb-0 table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">합격예측</th>
                                                    <th scope="col">대학</th>
                                                    <th scope="col">내 환산등급</th>
                                                    <th scope="col">상세 정보</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-danger">
                                                    <td>위험</td>
                                                    <td>서울대</td>
                                                    <td>1.3</td>
                                                    <td>상세</td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <td>불안</td>
                                                    <td>연세대(서울)</td>
                                                    <td>1.2</td>
                                                    <td>상세</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <td>가능</td>
                                                    <td>고려대(서울)</td>
                                                    <td>1.2</td>
                                                    <td>상세</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <td>안정</td>
                                                    <td>한양대</td>
                                                    <td>1.2</td>
                                                    <td>상세</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <td>안정</td>
                                                    <td>성균관대</td>
                                                    <td>1.2</td>
                                                    <td>상세</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="content-sidebar col-md-4 d-none d-md-block sticky-md-top">
                    <div class="card">
                        <div class="card-header">
                            <h5>등급 안내</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">내신 등급 비율 안내</h5>
                            <p class="card-text">비율을 참고하여 등급을 입력해주세요.</p>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">등급</th>
                                        <th scope="col">누적비율</th>
                                        <th scope="col">등급비율</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="grades-label" scope="row">1</th>
                                        <td>~ 4%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">2</th>
                                        <td>~ 11%</td>
                                        <td>7%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">3</th>
                                        <td>~ 23%</td>
                                        <td>12%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">4</th>
                                        <td>~ 40%</td>
                                        <td>17%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">5</th>
                                        <td>~ 60%</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">6</th>
                                        <td>~ 77%</td>
                                        <td>17%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">7</th>
                                        <td>~ 89%</td>
                                        <td>12%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">8</th>
                                        <td>~ 96%</td>
                                        <td>7%</td>
                                    </tr>
                                    <tr>
                                        <th class="grades-label" scope="row">9</th>
                                        <td>~ 100%</td>
                                        <td>4%</td>
                                    </tr>
                                </tbody>
                            </table>
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