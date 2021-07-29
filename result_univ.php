<!doctype html>
<html lang="ko" class="h-100">

<?php require "./module/get_post_univ.php"; ?>

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

                    <p class="lead">학생의 기본 정보와 내신 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시 전형 추천 대학을 보여드립니다.</p>

                    <div class="card card-body">
                        <div class="result-table table-responsive">
                            <table class="table table-bordered">
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
                                            <div class="table-resposive">
                                                <h5>수시 예측</h5>
                                                <table class="table mb-0 table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">합격예측</th>
                                                            <th scope="col">대학</th>
                                                            <th scope="col">내 환산 등급</th>
                                                            <th scope="col">상세 정보</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $modal_count = 0;

                                                        foreach ($sushi_final_result as $result) {

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
                                                            echo "<td>" . $result[5] . "</td>";
                                                            echo "<td>" . "<button type='button' class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#modal" . $modal_count . "'>" . "상세" . "</button>" . "</td>";
                                                            echo "</tr>";
                                                        ?>
                                                            <div class="modal fade" id="modal<?php echo $modal_count; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="Label<?php echo $modal_count; ?>">상세보기</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST">
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" placeholder="코드를 입력해주세요" id="code-input" name="code-input"></textarea>
                                                                                    <label for="code-input">승인 코드</label>
                                                                                </div>
                                                                                <input class="btn btn-primary" type="submit" name="btn-ok" id="btn-ok" value="확인">
                                                                            </form>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                            $modal_count++;
                                                        }

                                                        function testcode($code)
                                                        {
                                                            $hostname = "localhost";
                                                            $user = "iruri";
                                                            $password = "test123";
                                                            $dbname = "sushi_db";

                                                            $database = mysqli_connect($hostname, $user, $password, $dbname);

                                                            if (!$database) {
                                                                die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
                                                            }

                                                            $sql = "SELECT * FROM codes";

                                                            $fetch_all = mysqli_query($database, $sql);

                                                            $code_list = array();

                                                            while ($row = mysqli_fetch_array($fetch_all)) {

                                                                array_push($code_list, $row);
                                                            }

                                                            mysqli_close($database);

                                                            $iscorrect = false;

                                                            foreach ($code_list as $codedata) {
                                                                if ($codedata['code'] === $code) {
                                                                    $iscorrect = true;
                                                                    break;
                                                                }
                                                            }

                                                            if ($iscorrect === true) {
                                                                echo "맞다";
                                                            } else {
                                                                echo "틀리다";
                                                            }
                                                        }

                                                        if (array_key_exists('btn-ok', $_POST)) {
                                                            testcode($_POST['code-input']);
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
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
                                                        foreach ($sushi_final_result as $result) {

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


    <?php require "./module/footer.php" ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>