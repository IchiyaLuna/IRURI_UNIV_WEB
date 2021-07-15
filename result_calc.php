<!doctype html>
<html lang="ko" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <title>UNDER DEV - Calc Page</title>

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
                        <table class="table mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">과목명</th>
                                    <th scope="col">석차</th>
                                    <th scope="col">동석차</th>
                                    <th scope="col">이수자</th>
                                    <th scope="col">단위</th>
                                    <th scope="col">등급</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($subjects as $data) {

                                    echo "<tr>";

                                    echo "<td>" . $data[0] . "</td>";
                                    echo "<td>" . $data[1] . "등" . "</td>";
                                    echo "<td>" . $data[2] . "명" . "</td>";
                                    echo "<td>" . $data[3] . "명" . "</td>";
                                    echo "<td>" . $data[4] . "단위" . "</td>";
                                    echo "<td>" . "<div class='text-danger'>" . $data[5] . "등급" . "</div>" . "</td>";

                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-center fw-bold text-danger">
                                        <?php echo "평균 등급 : " . $final_grade; ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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