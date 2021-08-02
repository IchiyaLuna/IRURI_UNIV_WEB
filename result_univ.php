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
                                            <div>
                                                <h5>수시 예측</h5>
                                                <table class="table mb-0 table-hover caption-top">
                                                    <caption>예측 결과는 참고용으로만 사용해 주시기 바랍니다.</caption>
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
                                                        ?>
                                                            <td>
                                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?php echo $modal_count; ?>">
                                                                    상세
                                                                </button>
                                                            </td>
                                                        <?php
                                                            echo "</tr>";
                                                            $modal_count++;
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
                        <?php if ($percentile != -1) {
                        ?>
                            <div class="result-table table-responsive">
                                <table class="table table-bordered caption-top">

                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <div>
                                                    <h5>정시 예측</h5>
                                                    <table class="table mb-0 table-hover caption-top">
                                                        <caption>예측 결과는 참고용으로만 사용해 주시기 바랍니다.</caption>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">합격예측</th>
                                                                <th scope="col">대학</th>
                                                                <th scope="col">합격자 평균</th>
                                                                <th scope="col">내 예상 백분위</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $modal_count = 0;

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
                                                                echo "<td>" . $result[2] . "%" . "</td>";
                                                                echo "<td>" . round($result[3], 2) . "%" . "</td>";
                                                                echo "</tr>";
                                                                $modal_count++;
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
                        <?php
                        }
                        ?>
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

        <?php
        $modal_count = 0;

        foreach ($sushi_final_result as $result) {
        ?>
            <div class="modal fade" id="modal<?php echo $modal_count; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="label<?php echo $modal_count; ?>">상세 정보</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="result-table table-responsive">
                                <table class="table table-hover caption-top">
                                    <caption>모바일 환경에서는 상하좌우로 스와이프하여 내용을 확인해주세요</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col">학교</th>
                                            <th scope="col">합격자 평균</th>
                                            <th scope="col">내 환산 등급</th>
                                            <th scope="col">등급 간 차이</th>
                                            <th scope="col">합격예측</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $result[1]; ?></td>
                                            <td><?php echo $result[4]; ?></td>
                                            <td><?php echo $result[5]; ?></td>
                                            <td><?php echo $result[6]; ?></td>
                                            <?php
                                            switch ($result[0]) {
                                                case 0:
                                                    echo "<td>" . "안정" . "</td>";
                                                    break;
                                                case 1:
                                                    echo "<td>" . "가능" . "</td>";
                                                    break;
                                                case 2:
                                                    echo "<td>" . "불안" . "</td>";
                                                    break;
                                                case 3:
                                                    echo "<td>" . "위험" . "</td>";
                                                    break;
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div class="table-resposive">
                                                    <h5>추천 학과</h5>
                                                    <?php
                                                    $hostname = "localhost";
                                                    $user = "iruri";
                                                    $password = "test123";
                                                    $dbname = "sushi_db";

                                                    $database = mysqli_connect(
                                                        $hostname,
                                                        $user,
                                                        $password,
                                                        $dbname
                                                    );

                                                    if (!$database) {
                                                        die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT * FROM sushi_2022_dept WHERE code = '{$result[7]}' AND type = '{$type}'";

                                                    $fetch_all = mysqli_query($database, $sql);

                                                    $dept_list = array();

                                                    while ($row = mysqli_fetch_array($fetch_all)) {

                                                        array_push($dept_list, $row);
                                                    }

                                                    mysqli_close($database);

                                                    $dept_result_list = array();

                                                    foreach ($dept_list as $dept) {
                                                        $gap = 0;

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
                                                                $this_time_myavg = -1;
                                                                break;
                                                        }

                                                        $this_time_result = array($dept['ca'], $dept['dept'], $dept['low'], $dept['high'], $dept['avg'], $this_time_myavg, $gap);
                                                        array_push($dept_result_list, $this_time_result);
                                                    }

                                                    $sort = array();

                                                    foreach ((array) $dept_result_list as $key => $value) {

                                                        $sort[$key] = $value[6];
                                                    }

                                                    array_multisort($sort, SORT_ASC, $dept_result_list);

                                                    $dept_final_result = array();

                                                    foreach ($dept_result_list as $data) {
                                                        if ($data[5] < $data[3]) $posi = 0;
                                                        elseif ($data[6] > 0) $posi = 1;
                                                        elseif ($data[5] > $data[2]) $posi = 3;
                                                        else $posi = 2;

                                                        $arr_to_push = array($posi, $data[0], $data[1], $data[4], $data[5], $data[6]);
                                                        array_push($dept_final_result, $arr_to_push);
                                                    }

                                                    $index = 0;
                                                    $dept_count = sizeof($dept_final_result);
                                                    $final_result = array();

                                                    if ($dept_count >= 10) {

                                                        foreach ($dept_final_result as $dept) {

                                                            if ($dept[5] < 0.0) {
                                                                if ($index == $dept_count - 7) break;
                                                                $index++;
                                                                continue;
                                                            } elseif ($dept[5] >= 0.0) break;
                                                        }

                                                        if ($index < 3) {
                                                            for ($i = 0; $i < 10; $i++) {

                                                                $arr_to_push = $dept_final_result[$i];
                                                                array_push($final_result, $arr_to_push);
                                                            }
                                                        } else {
                                                            for ($i = $index - 3; $i < $index + 7; $i++) {
                                                                $arr_to_push = $dept_final_result[$i];
                                                                array_push($final_result, $arr_to_push);
                                                            }
                                                        }
                                                    } else {

                                                        foreach ($dept_final_result as $dept) {
                                                            $arr_to_push = $dept;
                                                            array_push($final_result, $arr_to_push);
                                                        }
                                                    }
                                                    ?>
                                                    <table class="table mb-0 table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">합격예측</th>
                                                                <th scope="col">전형</th>
                                                                <th scope="col">모집단위</th>
                                                                <th scope="col">합격자 평균</th>
                                                                <th scope="col">내 환산 등급</th>
                                                                <th scope="col">등급 간 차이</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($final_result as $dept) {
                                                                switch ($dept[0]) {
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

                                                                echo "<td>" . $dept[1] . "</td>";
                                                                echo "<td>" . $dept[2] . "</td>";
                                                                echo "<td>" . $dept[3] . "</td>";
                                                                echo "<td>" . $dept[4] . "</td>";
                                                                echo "<td>" . $dept[5] . "</td>";
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            $modal_count++;
        }
        ?>
    </main>


    <?php require "./module/footer.php" ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>