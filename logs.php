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
        <title>UNDER DEV - Logs</title>

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
                <!-- Divider -->
                <hr class="sidebar-divider">

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
                                        <div class="table-responsive mt-3">
                                            <table class="table table-bordered dataTable" id="ulogtable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">날짜</th>
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
                                    <div class="tab-pane fade" id="dept" role="tabpanel">
                                        <div class="table-responsive mt-3">
                                            <table class="table table-bordered dataTable" id="dlogtable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">날짜</th>
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
                                                                    case 0:
                                                                        echo "AI";
                                                                        break;

                                                                    case 1:
                                                                        echo "영어번역";
                                                                        break;

                                                                    case 2:
                                                                        echo "영어";
                                                                        break;

                                                                    case 3:
                                                                        echo "E-비즈니스";
                                                                        break;

                                                                    case 4:
                                                                        echo "글로벌 비즈니스";
                                                                        break;

                                                                    case 5:
                                                                        echo "경영";
                                                                        break;

                                                                    case 6:
                                                                        echo "IT";
                                                                        break;

                                                                    case 7:
                                                                        echo "문화";
                                                                        break;

                                                                    case 8:
                                                                        echo "언어";
                                                                        break;

                                                                    case 9:
                                                                        echo "시스템";
                                                                        break;

                                                                    case 10:
                                                                        echo "소프트웨어";
                                                                        break;

                                                                    case 11:
                                                                        echo "가족·아동";
                                                                        break;

                                                                    case 12:
                                                                        echo "복지";
                                                                        break;

                                                                    case 13:
                                                                        echo "아랍어";
                                                                        break;

                                                                    case 16:
                                                                        echo "금융 경제";
                                                                        break;

                                                                    case 17:
                                                                        echo "경찰행정";
                                                                        break;

                                                                    case 22:
                                                                        echo "행정";
                                                                        break;

                                                                    case 23:
                                                                        echo "법";
                                                                        break;

                                                                    case 28:
                                                                        echo "관광";
                                                                        break;

                                                                    case 29:
                                                                        echo "미디어";
                                                                        break;

                                                                    case 31:
                                                                        echo "교통";
                                                                        break;

                                                                    case 34:
                                                                        echo "국문";
                                                                        break;

                                                                    case 36:
                                                                        echo "그리스·불가리아";
                                                                        break;

                                                                    case 37:
                                                                        echo "스포츠 산업";
                                                                        break;

                                                                    case 39:
                                                                        echo "글로벌리더";
                                                                        break;

                                                                    case 45:
                                                                        echo "네덜란드";
                                                                        break;

                                                                    case 46:
                                                                        echo "러시아";
                                                                        break;

                                                                    case 52:
                                                                        echo "독일어";
                                                                        break;

                                                                    case 54:
                                                                        echo "소방행정";
                                                                        break;

                                                                    case 55:
                                                                        echo "동양어";
                                                                        break;

                                                                    case 57:
                                                                        echo "외식경영";
                                                                        break;

                                                                    case 58:
                                                                        echo "루마니아";
                                                                        break;

                                                                    case 63:
                                                                        echo "무역";
                                                                        break;

                                                                    case 64:
                                                                        echo "문예창작";
                                                                        break;

                                                                    case 65:
                                                                        echo "문헌정보";
                                                                        break;

                                                                    case 79:
                                                                        echo "북한";
                                                                        break;

                                                                    case 80:
                                                                        echo "프랑스";
                                                                        break;

                                                                    case 81:
                                                                        echo "브라질";
                                                                        break;

                                                                    case 92:
                                                                        echo "소비자";
                                                                        break;

                                                                    case 98:
                                                                        echo "언론 신문";
                                                                        break;

                                                                    case 104:
                                                                        echo "유럽";
                                                                        break;

                                                                    case 107:
                                                                        echo "이탈리아";
                                                                        break;

                                                                    case 108:
                                                                        echo "인도";
                                                                        break;

                                                                    case 113:
                                                                        echo "정치외교정책";
                                                                        break;

                                                                    case 114:
                                                                        echo "중국";
                                                                        break;

                                                                    case 115:
                                                                        echo "중동";
                                                                        break;

                                                                    case 116:
                                                                        echo "아시아";
                                                                        break;

                                                                    case 123:
                                                                        echo "태국";
                                                                        break;

                                                                    case 124:
                                                                        echo "터키·아제르바이잔";
                                                                        break;

                                                                    case 125:
                                                                        echo "페르시아·이란";
                                                                        break;

                                                                    case 126:
                                                                        echo "포르투갈·폴란드";
                                                                        break;

                                                                    case 127:
                                                                        echo "한문";
                                                                        break;

                                                                    case 60:
                                                                        echo "말레이·인도네시아";
                                                                        break;

                                                                    case 62:
                                                                        echo "몽골";
                                                                        break;

                                                                    case 75:
                                                                        echo "베트남";
                                                                        break;

                                                                    case 87:
                                                                        echo "스페인";
                                                                        break;

                                                                    case 90:
                                                                        echo "세르비아·크로아티아";
                                                                        break;

                                                                    case 97:
                                                                        echo "스칸다나비아";
                                                                        break;

                                                                    case 100:
                                                                        echo "아프리카";
                                                                        break;

                                                                    case 102:
                                                                        echo "우크라이나";
                                                                        break;

                                                                    case 111:
                                                                        echo "일본";
                                                                        break;

                                                                    case 120:
                                                                        echo "체코·슬로바키아";
                                                                        break;

                                                                    case 129:
                                                                        echo "헝가리";
                                                                        break;

                                                                    case 84:
                                                                        echo "상담·심리";
                                                                        break;

                                                                    case 14:
                                                                        echo "간호";
                                                                        break;

                                                                    case 38:
                                                                        echo "의예";
                                                                        break;

                                                                    case 67:
                                                                        echo "물리치료·재활";
                                                                        break;

                                                                    case 74:
                                                                        echo "방사선";
                                                                        break;

                                                                    case 89:
                                                                        echo "응급구조";
                                                                        break;

                                                                    case 121:
                                                                        echo "수의예·치의예·한의예";
                                                                        break;

                                                                    case 122:
                                                                        echo "치위생";
                                                                        break;

                                                                    case 128:
                                                                        echo "약";
                                                                        break;

                                                                    case 27:
                                                                        echo "교육";
                                                                        break;

                                                                    case 82:
                                                                        echo "통계";
                                                                        break;

                                                                    case 93:
                                                                        echo "수학";
                                                                        break;

                                                                    case 24:
                                                                        echo "화학";
                                                                        break;

                                                                    case 26:
                                                                        echo "과학";
                                                                        break;

                                                                    case 30:
                                                                        echo "광기술";
                                                                        break;

                                                                    case 48:
                                                                        echo "뇌과학";
                                                                        break;

                                                                    case 49:
                                                                        echo "대기과학";
                                                                        break;

                                                                    case 53:
                                                                        echo "생명과학";
                                                                        break;

                                                                    case 66:
                                                                        echo "물리학";
                                                                        break;

                                                                    case 68:
                                                                        echo "미생물";
                                                                        break;

                                                                    case 70:
                                                                        echo "바이오";
                                                                        break;

                                                                    case 118:
                                                                        echo "지질학";
                                                                        break;

                                                                    case 50:
                                                                        echo "데이터·빅데이터";
                                                                        break;

                                                                    case 94:
                                                                        echo "보안";
                                                                        break;

                                                                    case 41:
                                                                        echo "금속·접합";
                                                                        break;

                                                                    case 42:
                                                                        echo "기계공";
                                                                        break;

                                                                    case 44:
                                                                        echo "에너지";
                                                                        break;

                                                                    case 58:
                                                                        echo "로봇";
                                                                        break;

                                                                    case 71:
                                                                        echo "반도체";
                                                                        break;

                                                                    case 106:
                                                                        echo "전기·전자";
                                                                        break;

                                                                    case 112:
                                                                        echo "정보통신";
                                                                        break;

                                                                    case 96:
                                                                        echo "항공우주";
                                                                        break;

                                                                    case 19:
                                                                        echo "나노·소재";
                                                                        break;

                                                                    case 95:
                                                                        echo "자동차";
                                                                        break;

                                                                    case 15:
                                                                        echo "건축·건설";
                                                                        break;

                                                                    case 25:
                                                                        echo "공간정보";
                                                                        break;

                                                                    case 31:
                                                                        echo "교통";
                                                                        break;

                                                                    case 51:
                                                                        echo "도시계획";
                                                                        break;

                                                                    case 61:
                                                                        echo "목재";
                                                                        break;

                                                                    case 85:
                                                                        echo "삼림·토목";
                                                                        break;

                                                                    case 18:
                                                                        echo "고고학";
                                                                        break;

                                                                    case 33:
                                                                        echo "역사";
                                                                        break;

                                                                    case 110:
                                                                        echo "인류학";
                                                                        break;

                                                                    case 119:
                                                                        echo "철학";
                                                                        break;

                                                                    case 43:
                                                                        echo "종교";
                                                                        break;

                                                                    case 20:
                                                                        echo "디자인";
                                                                        break;

                                                                    case 40:
                                                                        echo "패션의류";
                                                                        break;

                                                                    case 59:
                                                                        echo "애니메이션";
                                                                        break;

                                                                    case 69:
                                                                        echo "미술";
                                                                        break;

                                                                    case 101:
                                                                        echo "영화예술";
                                                                        break;

                                                                    case 32:
                                                                        echo "국방";
                                                                        break;

                                                                    case 35:
                                                                        echo "국제";
                                                                        break;

                                                                    case 83:
                                                                        echo "사회";
                                                                        break;

                                                                    case 21:
                                                                        echo "환경";
                                                                        break;

                                                                    case 73:
                                                                        echo "축산·동물";
                                                                        break;

                                                                    case 88:
                                                                        echo "해양";
                                                                        break;

                                                                    case 103:
                                                                        echo "원예·조경";
                                                                        break;

                                                                    case 105:
                                                                        echo "융합";
                                                                        break;

                                                                    case 109:
                                                                        echo "자율";
                                                                        break;
                                                                    default:
                                                                        echo "오류";
                                                                        break;
                                                                }
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
                $('#ulogtable').DataTable({
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
                $('#dlogtable').DataTable({
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