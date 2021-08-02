<!doctype html>
<html lang="ko" class="h-100">

<?php require "./module/get_post_dept.php"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <title>UNDER DEV - Result Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
                                        <th scope="col">단순 평균</th>
                                        <th scope="col">예상 정시 백분위</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $type; ?></td>
                                        <td><?php echo round($simple_avg, 2); ?></td>
                                        <td>
                                            <?php
                                            if ($percentile === -1) {
                                                echo "미응시";
                                            } else {
                                                echo round($percentile, 2) . "%";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <ul class="nav nav-tabs nav-fill" id="univ-result-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="sushi-tab" data-bs-toggle="tab" data-bs-target="#sushi" type="button" role="tab">수시 예측 보기</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <?php
                                                    if ($percentile != -1) {
                                                    ?>
                                                        <button class="nav-link" id="jungshi-tab" data-bs-toggle="tab" data-bs-target="#jungshi" type="button" role="tab">정시 예측 보기</button>
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
                                                                <th scope="col">내 환산 등급</th>
                                                                <th scope="col">등급 간 차이</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $modal_count = 0;

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
                                                                echo "<td>" . $result[5] . "</td>";
                                                                echo "<td>" . $result[6] . "</td>";
                                                                echo "</tr>";
                                                                $modal_count++;
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="tab-pane fade" id="jungshi" role="tabpanel">
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
                                                                    <th scope="col">내 예상 백분위</th>
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
                                                                    echo "<td>" . round($result[5], 2) . "%" . "</td>";
                                                                    echo "</tr>";
                                                                    $modal_count++;
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