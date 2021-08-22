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
        <title>UNDER DEV - Auth Logs</title>

        <!-- Custom fonts for this template-->
        <link href="./assets/fa-assets/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./admin.php">
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
                            <a class="collapse-item" href="logs.php">입력 기록</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#detailcollapse" aria-expanded="true" aria-controls="detailcollapse">
                        <i class="fas fa-sms"></i>
                        <span>핸드폰 인증 기록</span>
                    </a>
                    <div id="detailcollapse" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">핸드폰 인증 기록:</h6>
                            <a class="collapse-item" href="authlog.php">인증 내역</a>
                        </div>
                    </div>
                </li>
                <!-- Heading 
                <div class="sidebar-heading">
                    자료 관리
                </div>
-->
                <!-- Nav Item - Pages Collapse Menu 
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
-->
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
                            <h1 class="h3 mb-0 text-gray-800">핸드폰 인증 기록</h1>
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

                        $sql = "SELECT * FROM codes";

                        $fetch_all = mysqli_query($database, $sql);

                        $authlist = array();

                        while ($row = mysqli_fetch_array($fetch_all)) {

                            array_push($authlist, $row);
                        }
                        ?>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">전체 내역</h6>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive mt-3">
                                    <table class="table table-bordered dataTable" id="authlogtable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">날짜</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">고유 아이디</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">인증 전화번호</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">접근 횟수</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($authlist as $authlog) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $authlog['time']; ?></td>
                                                    <td><?php echo $authlog['UID']; ?></td>
                                                    <td><?php echo $authlog['phone']; ?></td>
                                                    <td><?php echo $authlog['access']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
        <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="./assets/vendor/chart.js/Chart.min.js"></script>

        <script src="./assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="./assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->

        <script type="text/javascript">
            $(document).ready(function() {
                $('#authlogtable').DataTable({
                    "order": [0, 'desc'],
                    "language": {
                        "lengthMenu": "최대 _MENU_ 기록 표시",
                        "search": "검색 : ",
                        "info": "총 _TOTAL_ 페이지 중 _PAGE_ 에서 _PAGES_ 페이지",
                        "paginate": {
                            "previous": "이전",
                            "next": "다음"
                        }
                    }
                });
            });
        </script>
    </body>

    </html>

<?php } ?>