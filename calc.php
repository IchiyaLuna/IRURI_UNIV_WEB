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
    <link href="../assets/css/calc.css" rel="stylesheet">
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

                    <div class="dynamic-input mb-3">
                        <form id="subject-form" class="needs-validation" method="POST" action="./result_calc.php" autocomplete="off" novalidate>
                            <table class="table table-light calc-table">
                                <thead class="thead-wb">
                                    <th scope="col">
                                        <div class="text-center">학년</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">과목분류</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">석차</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">동석차</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">이수자</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">이수단위</div>
                                    </th>
                                    <th scope="col">
                                        <div class="text-center">추가·삭제</div>
                                    </th>
                                </thead>
                                <tbody>
                                    <tr class="first">
                                        <td class="align-middle" rowspan="5">1학년</td>
                                        <td>
                                            <div class="text-center">국어</div>
                                            <input type="hidden" name="fsubject[]" value="ko">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="frank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ftime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">수학</div>
                                            <input type="hidden" name="fsubject[]" value="ma">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="frank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ftime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">영어</div>
                                            <input type="hidden" name="fsubject[]" value="en">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="frank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ftime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">사회</div>
                                            <input type="hidden" name="fsubject[]" value="so">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="frank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ftime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">과학</div>
                                            <input type="hidden" name="fsubject[]" value="sc">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="frank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="fstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ftime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="first">
                                        <td class="align-middle" rowspan="5">2학년</td>
                                        <td>
                                            <div class="text-center">국어</div>
                                            <input type="hidden" name="ssubject[]" value="ko">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="srank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ssamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="sstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="stime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">수학</div>
                                            <input type="hidden" name="ssubject[]" value="ma">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="srank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ssamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="sstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="stime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">영어</div>
                                            <input type="hidden" name="ssubject[]" value="en">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="srank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ssamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="sstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="stime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">사회</div>
                                            <input type="hidden" name="ssubject[]" value="so">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="srank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ssamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="sstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="stime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">과학</div>
                                            <input type="hidden" name="ssubject[]" value="sc">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="srank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ssamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="sstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="stime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="first">
                                        <td class="align-middle" rowspan="5">3학년</td>
                                        <td>
                                            <div class="text-center">국어</div>
                                            <input type="hidden" name="tsubject[]" value="ko">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="trank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ttime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">수학</div>
                                            <input type="hidden" name="tsubject[]" value="ma">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="trank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ttime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">영어</div>
                                            <input type="hidden" name="tsubject[]" value="en">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="trank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ttime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">사회</div>
                                            <input type="hidden" name="tsubject[]" value="so">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="trank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ttime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center">과학</div>
                                            <input type="hidden" name="tsubject[]" value="sc">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="trank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tsamerank[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="tstudents[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center" oninput="InputLock(this);" pattern="\d*" name="ttime[]" required>
                                        </td>
                                        <td>
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="btn-group float-end" role="group">
                        <button type="button" class="btn btn-warning" onclick="CalcRefresh();"><i class="fas fa-redo-alt"></i>&nbsp;초기화</button>
                        <button type="button" class="btn btn-primary" onclick="test_calc_input();"><i class="fas fa-calculator"></i>&nbsp;등급 계산 하기</button>
                    </div>
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
                        최소 한 과목을 입력해야 하며, 과목을 입력할 때에는 석차, 동석차, 이수자, 이수단위를 모두 입력해주세요.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">확인</button>
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
                        석차, 동석차, 이수자, 이수단위는 0보다 커야 합니다.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">확인</button>
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
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">확인</button>
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