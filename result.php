<!doctype html>
<html lang="ko" class="h-100">

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

            <div class='row'>

                <div class="content-main col-md-8 bg-light border rounded-3">

                    <h1>대학 합격 예측기</h1>

                    <p class="lead">학생의 기본 정보와 내신 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시 전형 추천 대학을 보여드립니다.</p>

                    <div class="card card-body">
                        아 응애애요<br>
                        <?php
                        $gender = $_POST['gender-radio'] . "<br>";
                        $type = $_POST['type-radio'] . "<br>";

                        $first_korean = $_POST['first-korean'] . "<br>";
                        $first_math =  $_POST['first-math'] . "<br>";
                        $first_english =  $_POST['first-english'] . "<br>";
                        $first_history =  $_POST['first-history'] . "<br>";
                        $first_social =  $_POST['first-social'] . "<br>";
                        $first_science =  $_POST['first-science'] . "<br>";

                        $second_korean = $_POST['second-korean'] . "<br>";
                        $second_math =  $_POST['second-math'] . "<br>";
                        $second_english =  $_POST['second-english'] . "<br>";
                        $second_history =  $_POST['second-history'] . "<br>";
                        $second_social =  $_POST['second-social'] . "<br>";
                        $second_science =  $_POST['second-science'] . "<br>";

                        $third_korean = $_POST['third-korean'] . "<br>";
                        $third_math = $_POST['third-math'] . "<br>";
                        $third_english = $_POST['third-english'] . "<br>";
                        $third_history = $_POST['third-history'] . "<br>";
                        $third_social = $_POST['third-social'] . "<br>";
                        $third_science = $_POST['third-science'] . "<br>";

                        echo "성별 = ";

                        if ($gender == 1) {
                            echo "남자" . "<br>";
                        }
                        if ($gender == 2) {
                            echo "여자" . "<br>";
                        }

                        echo "계열 = ";
                        if ($type == 1) {
                            echo "인문" . "<br>";
                        }
                        if ($type == 2) {
                            echo "자연" . "<br>";
                        }

                        echo "1학년 성적 = ";
                        echo $first_korean . " ";
                        echo $first_math . " ";
                        echo $first_english . " ";
                        echo $first_history . " ";
                        echo $first_social . " ";
                        echo $first_science . "<br>";

                        echo "2학년 성적 = ";
                        echo $second_korean . " ";
                        echo $second_math . " ";
                        echo $second_english . " ";
                        echo $second_history . " ";
                        echo $second_social . " ";
                        echo $second_science . "<br>";

                        echo "3학년 성적 = ";
                        echo $third_korean . " ";
                        echo $third_math . " ";
                        echo $third_english . " ";
                        echo $third_history . " ";
                        echo $third_social . " ";
                        echo $third_science . "<br>";
                        ?>
                    </div>


                </div>

                <div class='content-sidebar col-md-4 d-none d-md-block sticky-md-top'>
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