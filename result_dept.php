<!doctype html>
<html lang="ko" class="h-100">

<?php require "./module/get_post_dept.php"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <link rel="shortcut icon" href="./assets/img/favicon.ico">
    <link rel="icon" href="./assets/img/favicon.ico">
    <title>이루리학원 - 대학 합격 예측기</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/fa-assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/main.css" rel="stylesheet">
    <link href="./assets/css/result.css" rel="stylesheet">
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

                    <p class="lead">
                        학생의 기본 정보와 내신, 수능(모의고사) 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시, 정시 전형 추천 대학 혹은 학과를 보여드립니다.<br>
                        (구형 웹 브라우저인 인터넷 익스플로러에서는 작동이 불가능하니 크롬, 엣지, 웨일 등의 최신 브라우저를 이용해주세요.)
                    </p>

                    <div class="card card-body">
                        <div class="result-table table-responsive">
                            <table class="table table-bordered caption-top">
                                <caption>모바일 환경에서는 좌우로 스와이프하여 내용을 확인해주세요</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">성별</th>
                                        <th scope="col">계열</th>
                                        <th scope="col">선택 분야</th>
                                        <th scope="col">단순 평균</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $type; ?></td>
                                        <td>
                                            <?php
                                            switch ($deptwant) {
                                                case 1:
                                                    echo "간호";
                                                    break;
                                                case 2:
                                                    echo "건축";
                                                    break;
                                                case 3:
                                                    echo "경영";
                                                    break;
                                                case 4:
                                                    echo "경제";
                                                    break;
                                                case 5:
                                                    echo "교육";
                                                    break;
                                                case 6:
                                                    echo "교통/운송";
                                                    break;
                                                case 7:
                                                    echo "국방";
                                                    break;
                                                case 8:
                                                    echo "기계/금속";
                                                    break;
                                                case 9:
                                                    echo "농림/수산";
                                                    break;
                                                case 10:
                                                    echo "디자인";
                                                    break;
                                                case 11:
                                                    echo "로봇/항공/자동차";
                                                    break;
                                                case 12:
                                                    echo "물리";
                                                    break;
                                                case 13:
                                                    echo "미디어";
                                                    break;
                                                case 14:
                                                    echo "법";
                                                    break;
                                                case 15:
                                                    echo "보건/치료";
                                                    break;
                                                case 16:
                                                    echo "사회학";
                                                    break;
                                                case 17:
                                                    echo "산업";
                                                    break;
                                                case 18:
                                                    echo "생물";
                                                    break;
                                                case 19:
                                                    echo "생활과학";
                                                    break;
                                                case 20:
                                                    echo "수의예/치의예/한의예";
                                                    break;
                                                case 21:
                                                    echo "수학";
                                                    break;
                                                case 22:
                                                    echo "신소재/재료";
                                                    break;
                                                case 23:
                                                    echo "언어/문학";
                                                    break;
                                                case 24:
                                                    echo "에너지/정밀";
                                                    break;
                                                case 25:
                                                    echo "영어";
                                                    break;
                                                case 26:
                                                    echo "영화/애니메이션";
                                                    break;
                                                case 27:
                                                    echo "예술";
                                                    break;
                                                case 28:
                                                    echo "융합/자율전공";
                                                    break;
                                                case 29:
                                                    echo "의예";
                                                    break;
                                                case 30:
                                                    echo "인문학";
                                                    break;
                                                case 31:
                                                    echo "전기/전자";
                                                    break;
                                                case 32:
                                                    echo "지구과학";
                                                    break;
                                                case 33:
                                                    echo "컴퓨터/통신";
                                                    break;
                                                case 34:
                                                    echo "토목/도시";
                                                    break;
                                                case 35:
                                                    echo "행정";
                                                    break;
                                                case 36:
                                                    echo "화학";
                                                    break;
                                                case 37:
                                                    echo "환경";
                                                    break;
                                                default:
                                                    echo "오류";
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($simple_avg != 0) {
                                                echo round($simple_avg, 2);
                                            } else {
                                                echo "입력하지 않음";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <ul class="nav nav-tabs nav-fill" id="univ-result-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <?php
                                                    if ($simple_avg != 0) {
                                                    ?>
                                                        <button class="nav-link active" id="sushi-tab" data-bs-toggle="tab" data-bs-target="#sushi" type="button" role="tab">수시 예측 보기</button>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <button class="nav-link disabled" id="sushi-tab" data-bs-toggle="tab" data-bs-target="#sushi" type="button" role="tab">수시 입력하지 않음</button>
                                                    <?php
                                                    }
                                                    ?>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <?php
                                                    if ($percentile != -1) {
                                                        if ($simple_avg != 0) {
                                                    ?>
                                                            <button class="nav-link" id="jungshi-tab" data-bs-toggle="tab" data-bs-target="#jungshi" type="button" role="tab">정시 예측 보기</button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button class="nav-link active" id="jungshi-tab" data-bs-toggle="tab" data-bs-target="#jungshi" type="button" role="tab">정시 예측 보기</button>
                                                        <?php
                                                        }
                                                        ?>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <button class="nav-link disabled" id="jungshi-tab" data-bs-toggle="tab" data-bs-target="#jungshi" type="button" role="tab">정시 응시하지 않음</button>
                                                    <?php
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <?php
                                                if ($simple_avg != 0) {
                                                ?>
                                                    <div class="tab-pane fade show active" id="sushi" role="tabpanel">
                                                        <table class="table mb-0 table-hover caption-top">
                                                            <caption>예측 결과는 참고용으로만 사용해 주시기 바랍니다.</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">합격예측</th>
                                                                    <th scope="col">대학</th>
                                                                    <th scope="col">전형</th>
                                                                    <th scope="col">모집단위</th>
                                                                    <th scope="col">합격자 평균</th>
                                                                    <th scope="col">등급 간 차이</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($sushi_final_result as $result) {
                                                                    if ($result['possible'] == 1) {
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
                                                                    } else {
                                                                        echo "<tr class='table-secondary'>";
                                                                        echo "<td>" . "최저기준미달" . "</td>";
                                                                    }
                                                                    echo "<td>" . $result[1] . "</td>";
                                                                    echo "<td>" . $result[2] . "</td>";
                                                                    echo "<td>" . $result[3] . "</td>";
                                                                    echo "<td>" . $result[4] . "</td>";
                                                                    echo "<td>" . $result[6] . "</td>";
                                                                    echo "</tr>";
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="tab-pane fade" id="sushi" role="tabpanel">
                                                        <p>입력하지 않아 결과를 표시하지 않습니다.</p>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="tab-pane fade <?php if ($simple_avg == 0) echo 'show active'; ?>" id="jungshi" role="tabpanel">
                                                    <?php
                                                    if ($percentile != -1) {
                                                    ?>
                                                        <table class="table mb-0 table-hover caption-top">
                                                            <caption>예측 결과는 참고용으로만 사용해 주시기 바랍니다.</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">합격예측</th>
                                                                    <th scope="col">대학</th>
                                                                    <th scope="col">전형</th>
                                                                    <th scope="col">모집단위</th>
                                                                    <th scope="col">합격자 평균</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($jungshi_final_result as $result) {

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
                                                                    echo "<td>" . $result[2] . "</td>";
                                                                    echo "<td>" . $result[3] . "</td>";
                                                                    echo "<td>" . round($result[4], 2) . "%" . "</td>";
                                                                    echo "</tr>";
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <p>응시하지 않아 결과를 표시하지 않습니다.</p>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
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
    </main>


    <?php require "./module/footer.php" ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>