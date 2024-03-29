<!doctype html>
<html lang="ko" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <link rel="shortcut icon" href="./assets/img/favicon.ico">
    <link rel="icon" href="./assets/img/favicon.ico">
    <title>이루리학원 - 내신 등급 계산기</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/result.css" rel="stylesheet">
    <link href="../assets/fa-assets/css/all.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

    <!-- Begin page content -->

    <?php
    $cur_page = "calc";
    require "./module/navbar.php";
    ?>

    <main class="flex-shrink-0">

        <div class="container-fluid px-4">

            <div class='row'>

                <div class="content-main col-md-8 bg-light border rounded-3">

                    <h1>내신 등급 계산기</h1>

                    <p class="lead">학생의 내신 성적을 입력하시면 내신 등급을 계산합니다.</p>

                    <h5 class="pb-3 mb-3 border-bottom">계산 방법 혹은 조건에 따라 다를 수 있으나 표준적인 방법을 활용하여 학년 평균 등급을 계산합니다.</h5>

                    <?php require "./module/get_post_grade.php" ?>

                    <div class="result-table table-resposive mb-3">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="text-center">학년</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">과목</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">과목 등급</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">학년 등급</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center" rowspan="5">1학년</td>
                                    <td>
                                        <div class="text-center">국어</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($kor_mod[0] != 0) {
                                                echo $kor_mod[0] / $kor_time[0];
                                            } else {
                                                echo "수강하지 않음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center" rowspan="5">
                                        <?php
                                        if ($favg != 0) {
                                            echo $favg;
                                        } else {
                                            echo "입력하지 않음";
                                        } ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">수학</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($mat_mod[0] != 0) {
                                                echo $mat_mod[0] / $mat_time[0];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">영어</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($eng_mod[0] != 0) {
                                                echo $eng_mod[0] / $eng_time[0];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">사회</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($soc_mod[0] != 0) {
                                                echo $soc_mod[0] / $soc_time[0];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">과학</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($sci_mod[0] != 0) {
                                                echo $sci_mod[0] / $sci_time[0];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle text-center" rowspan="5">2학년</td>
                                    <td>
                                        <div class="text-center">국어</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($kor_mod[1] != 0) {
                                                echo $kor_mod[1] / $kor_time[1];
                                            } else {
                                                echo "수강하지 않음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center" rowspan="5">
                                        <?php
                                        if ($savg != 0) {
                                            echo $savg;
                                        } else {
                                            echo "입력하지 않음";
                                        } ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">수학</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($mat_mod[1] != 0) {
                                                echo $mat_mod[1] / $mat_time[1];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">영어</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($eng_mod[1] != 0) {
                                                echo $eng_mod[1] / $eng_time[1];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">사회</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($soc_mod[1] != 0) {
                                                echo $soc_mod[1] / $soc_time[1];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">과학</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($sci_mod[1] != 0) {
                                                echo $sci_mod[1] / $sci_time[1];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle text-center" rowspan="5">3학년</td>
                                    <td>
                                        <div class="text-center">국어</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($kor_mod[2] != 0) {
                                                echo $kor_mod[2] / $kor_time[2];
                                            } else {
                                                echo "수강하지 않음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center" rowspan="5">
                                        <?php
                                        if ($tavg != 0) {
                                            echo $tavg;
                                        } else {
                                            echo "입력하지 않음";
                                        } ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">수학</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($mat_mod[2] != 0) {
                                                echo $mat_mod[2] / $mat_time[2];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">영어</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($eng_mod[2] != 0) {
                                                echo $eng_mod[2] / $eng_time[2];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">사회</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($soc_mod[2] != 0) {
                                                echo $soc_mod[2] / $soc_time[2];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="text-center">과학</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($sci_mod[2] != 0) {
                                                echo $sci_mod[2] / $sci_time[2];
                                            } else {
                                                echo "수강하지 않음";
                                            } ?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="text-center">반영 과목</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">등급</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="text-center">전과목</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            echo round($simple_avg, 1);
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-center">국영수사</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($KMESO != 0) {
                                                echo round($KMESO, 1);
                                            } else {
                                                echo "해당 없음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-center">국영수과</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($KMESC != 0) {
                                                echo round($KMESC, 1);
                                            } else {
                                                echo "해당 없음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-center">국영사</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($KESO != 0) {
                                                echo round($KESO, 1);
                                            } else {
                                                echo "해당 없음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-center">국수과</div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php
                                            if ($KMSC != 0) {
                                                echo round($KMSC, 1);
                                            } else {
                                                echo "해당 없음";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <?php
                        if ($favg != 0 && $savg != 0 && $tavg != 0) {
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="text-center">학년별 반영 비율</div>
                                        </th>
                                        <th scope="col">
                                            <div class="text-center">등급</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="text-center">1:1:1</div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <?php
                                                echo round(($favg + $savg + $tavg) / 3, 1);
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">2:3:5</div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <?php
                                                echo round(($favg * 2 + $savg * 3 + $tavg * 5) / 10, 1);
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">3:3:4</div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <?php
                                                echo round(($favg * 3 + $savg * 3 + $tavg * 4) / 10, 1);
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "1, 2, 3학년을 모두 입력해야 학년별 반영 비율을 고려한 평균 등급을 알 수 있습니다.";
                        }
                        ?>
                    </div>

                    <button type="button" class="btn btn-warning float-end" onclick="location.href='./calc.php';"><i class="fas fa-redo-alt"></i>&nbsp;다시 계산하기</button>
                </div>

                <div class='content-sidebar col-md-4 d-none d-md-block sticky-md-top'>
                    <div class="card">
                        <div class="card-header">
                            <h5>등급 안내</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">내신 등급 비율 안내</h5>
                            <p class="card-text">내신 상위 퍼센트에 따른 등급 안내입니다.</p>
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

        <!-- Alert Modal -->
        <div class="alert-modal modal fade" id="no-input" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="no-input-label">오류</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        입력 칸은 비워둘 수 없습니다.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal();">확인</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert-modal modal fade" id="zero-input" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="zero-input-label">오류</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        석차, 동석차, 이수자, 단위수는 0보다 커야 합니다.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal();">확인</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert-modal modal fade" id="big-input" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="big-input-label">오류</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        석차는 학생 수보다 클 수 없습니다.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal();">확인</button>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php require "./module/footer.php" ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/calc.js"></script>
    <script src="../assets/js/valid.js"></script>
</body>

</html>