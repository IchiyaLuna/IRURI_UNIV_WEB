<!DOCTYPE html>
<?php session_start(); ?>

<?php if (!isset($_SESSION['user-id'])) {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('잘못된 접근입니다.')</script>";
    echo "<script>location.replace('./login.php')</script>";
} elseif (isset($_SESSION['user-id'])) {
    if ($_SESSION['user-id'] !== "admin") {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('잘못된 접근입니다.')</script>";
        echo "<script>location.replace('./login.php')</script>";
    }
?>

    <html lang="ko">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Ichiya Luna">
        <title>UNDER DEV - Admin Page</title>

        <!-- Custom fonts for this template-->
        <link href="./assets/fa-assets/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">IRURI Admin</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="./admin.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    관리 도구
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span>성적 기록</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">성적 입력 기록:</h6>
                            <a class="collapse-item" href="buttons.html">입력 기록</a>
                            <a class="collapse-item" href="cards.html">통계</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>인증 코드</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">인증 코드 메뉴:</h6>
                            <a class="collapse-item" href="utilities-color.html">코드 생성</a>
                            <a class="collapse-item" href="utilities-border.html">코드 목록</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    자료 관리
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>정시</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">수능/모의고사:</h6>
                            <a class="collapse-item" href="login.html">등급컷 관리</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>
                -->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- 
                <div class="sidebar-card d-none d-lg-flex">
                    <img class="sidebar-card-illustration mb-2" src="./assets/img/undraw_rocket.svg" alt="...">
                    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                        and more!</p>
                    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                        Pro!</a>
                </div>
                -->
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">관리자</span>
                                    <img class="img-profile rounded-circle" src="./assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <!--
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        설정
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    -->
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        로그아웃
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">성적 입력 기록</h1>
                        </div>

                        <!-- Content Row -->
                        <?php

                        $hostname = "localhost";
                        $user = "iruri";
                        $password = "test123";
                        $dbname = "sushi_db";

                        $database = mysqli_connect($hostname, $user, $password, $dbname);

                        if (!$database) {
                            die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM ulogs";

                        $fetch_all = mysqli_query($database, $sql);

                        $uloglist = array();

                        while ($row = mysqli_fetch_array($fetch_all)) {

                            array_push($uloglist, $row);
                        }

                        $sql = "SELECT * FROM dlogs";

                        $fetch_all = mysqli_query($database, $sql);

                        $dloglist = array();

                        while ($row = mysqli_fetch_array($fetch_all)) {

                            array_push($dloglist, $row);
                        }

                        $four = date('Y-m-d', $_SERVER['REQUEST_TIME'] - 86400 * 4);
                        $third = date('Y-m-d', $_SERVER['REQUEST_TIME'] - 86400 * 3);
                        $second = date('Y-m-d', $_SERVER['REQUEST_TIME'] - 86400 * 2);
                        $first = date('Y-m-d', $_SERVER['REQUEST_TIME'] - 86400);
                        $today = date('Y-m-d', $_SERVER['REQUEST_TIME']);

                        $logs = array(0, 0, 0, 0, 0);
                        $ucount = 0;
                        $dcount = 0;

                        foreach ($uloglist as $log) {
                            if ($log['time'] == $four) {
                                $logs[0]++;
                            } else if ($log['time'] == $third) {
                                $logs[1]++;
                            } else if ($log['time'] == $second) {
                                $logs[2]++;
                            } else if ($log['time'] == $first) {
                                $logs[3]++;
                            } else if ($log['time'] == $today) {
                                $logs[4]++;
                            }

                            $ucount++;
                        }

                        foreach ($dloglist as $log) {
                            if ($log['time'] == $four) {
                                $logs[0]++;
                            } else if ($log['time'] == $third) {
                                $logs[1]++;
                            } else if ($log['time'] == $second) {
                                $logs[2]++;
                            } else if ($log['time'] == $first) {
                                $logs[3]++;
                            } else if ($log['time'] == $today) {
                                $logs[4]++;
                            }

                            $dcount++;
                        }
                        ?>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">전체 내역</h6>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="logtab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="univ-tab" data-bs-toggle="tab" data-bs-target="#univ" type="button" role="tab">학교 입력 기록</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="dept-tab" data-bs-toggle="tab" data-bs-target="#dept" type="button" role="tab">학과 입력 기록</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="logtabcontent">
                                    <div class="tab-pane fade show active" id="univ" role="tabpanel">
                                        <div class="table-responsive">
                                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_length" id="dataTable_length"><label>한 페이지 <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select> 개 출력하기</label></div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div id="dataTable_filter" class="dataTables_filter"><label>검색:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-bordered dataTable" id="ulogtable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">날짜</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">지역</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">성별</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">계열</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">내신 평균</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">예상 백분위</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($uloglist as $log) {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $log['time']; ?></td>
                                                                        <td><?php echo $log['location']; ?></td>
                                                                        <td><?php echo $log['gender']; ?></td>
                                                                        <td><?php echo $log['type']; ?></td>
                                                                        <td><?php echo $log['avg']; ?></td>
                                                                        <td><?php
                                                                            if ($log['percentile'] == -1) {
                                                                                echo "미응시";
                                                                            } else {
                                                                                echo $log['percentile'] . "%";
                                                                            } ?></td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dept" role="tabpanel">
                                        <div class="table-responsive">
                                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_length" id="dataTable_length"><label>한 페이지 <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select> 개 출력하기</label></div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div id="dataTable_filter" class="dataTables_filter"><label>검색:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-bordered dataTable" id="dlogtable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">날짜</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">지역</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">성별</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">계열</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">희망 학과</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">내신 평균</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">예상 백분위</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($dloglist as $log) {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $log['time']; ?></td>
                                                                        <td><?php echo $log['location']; ?></td>
                                                                        <td><?php echo $log['gender']; ?></td>
                                                                        <td><?php echo $log['type']; ?></td>
                                                                        <td>
                                                                            <?php
                                                                            switch ($log['dcode']) {
                                                                            }
                                                                            echo "테스트";
                                                                            ?>
                                                                        </td>
                                                                        <td><?php echo $log['avg']; ?></td>
                                                                        <td>
                                                                            <?php
                                                                            if ($log['percentile'] == -1) {
                                                                                echo "미응시";
                                                                            } else {
                                                                                echo $log['percentile'] . "%";
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Ichiya Luna 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">로그아웃 하시겠습니까?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">아래 로그아웃 버튼을 누르면 관리자 계정에서 나갑니다.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
                        <a class="btn btn-primary" href="logout.php">로그아웃</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="./assets/vendor/jquery/jquery.min.js"></script>
        <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="./assets/vendor/chart.js/Chart.min.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->

        <script type="text/javascript">
            $(document).ready(function() {
                $('#ulogtable').DataTable();
                $('#dlogtable').DataTable();
            });
        </script>
    </body>

    </html>

<?php } ?>