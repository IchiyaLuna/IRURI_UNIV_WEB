<?php
if (isset($_COOKIE['authid'])) {

    $uid = $_COOKIE['authid'];

    $hostname = "db.iruri.gabia.io";
    $user = "iruri";
    $password = "iruridb3307";
    $dbname = "dbiruri";

    $database = mysqli_connect($hostname, $user, $password, $dbname);

    if (!$database) {
        die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM codes WHERE UID = '{$uid}'";

    $fetch_all = mysqli_query($database, $sql);

    $userlist = array();

    while ($row = mysqli_fetch_array($fetch_all)) {

        array_push($userlist, $row);
    }

    if (empty($userlist)) {
        setcookie("authid", "", 0, "/");
    } else {
        $newaccess = $userlist[0]['access'] + 1;
        $sql = "UPDATE codes SET access = '{$newaccess}' WHERE UID = '{$uid}'";
        mysqli_query($database, $sql);
    }

    mysqli_close($database);
}
?>


<!doctype html>
<html lang="ko" class="h-100">

<?php require "./module/get_post_univ.php"; ?>

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
                                        <th scope="col">단순 평균</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $type; ?></td>
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
                                                                    <th scope="col">합격자 평균
                                                                        <a href="#" class="d-inline-block" data-bs-toggle="tooltip" title="" data-bs-original-title="모든 학과를 고려한 평균으로, 특정 학과에 의해 크게 달라질 수 있으니 상세 정보를 같이 참고해주세요.">
                                                                            <i class="fas fa-question-circle"></i>
                                                                        </a>
                                                                    </th>
                                                                    <th scope="col">상세 정보
                                                                        <a href="#" class="d-inline-block" data-bs-toggle="tooltip" title="" data-bs-original-title="상세 정보를 확인하시면 입력한 성적을 바탕으로 해당 학교에서 학생에게 적합한 학과를 최대 10가지 보여드립니다.">
                                                                            <i class="fas fa-question-circle"></i>
                                                                        </a>
                                                                    </th>
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
                                                                    echo "<td>" . round($result[4], 2) . "</td>";
                                                                ?>
                                                                    <td>
                                                                        <button type="button" class="btn btn-secondary btn-sm" onclick="openmodal(<?php echo $modal_count; ?>)">
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
                                                                    <th scope="col">합격자 평균
                                                                        <a href="#" class="d-inline-block" data-bs-toggle="tooltip" title="" data-bs-original-title="모든 학과를 고려한 평균으로, 특정 학과에 의해 크게 달라질 수 있으니 상세 정보를 같이 참고해주세요.">
                                                                            <i class="fas fa-question-circle"></i>
                                                                        </a>
                                                                    </th>
                                                                    <th scope="col">상세 정보
                                                                        <a href="#" class="d-inline-block" data-bs-toggle="tooltip" title="" data-bs-original-title="상세 정보를 확인하시면 입력한 성적을 바탕으로 해당 학교에서 학생에게 적합한 학과를 최대 10가지 보여드립니다.">
                                                                            <i class="fas fa-question-circle"></i>
                                                                        </a>
                                                                    </th>
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
                                                                    echo "<td>" . round($result[2], 2) . "%" . "</td>";
                                                                ?>
                                                                    <td>
                                                                        <button type="button" class="btn btn-secondary btn-sm" onclick="openmodal(<?php echo ($modal_count + 1) * 100; ?>)">
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

        <div class="alert-modal modal fade" id="authmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelauth">휴대폰 인증</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h5>상세 정보를 확인하려면 인증이 필요합니다.</h5>
                        <form name="phonenumber" id="phonenumber">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="gradesel">학년</label>
                                <select class="form-select" id="gradesel" name="gradesel">
                                    <option value="-1" selected>학년을 선택해주세요</option>
                                    <option value="1">1학년</option>
                                    <option value="2">2학년</option>
                                    <option value="3">3학년</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="pnumlabel">핸드폰 번호</span>
                                <input type="text" class="form-control" id="pnumber" name="pnumber" placeholder="숫자만 입력해주세요">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="codelabel">인증번호</span>
                                <input type="text" class="form-control" id="authcode" name="authcode" maxlength="6" placeholder="숫자만 입력해주세요" disabled>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="agreecbox">
                                <label class="form-check-label" for="agreecbox">
                                    휴대폰 인증에 동의합니다.
                                </label>
                            </div>

                        </form>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-secondary" id="sendbtn" onclick="smssend()">인증번호 요청</button>
                            <button type="button" class="btn btn-success" id="checkbtn" onclick="codeauth()" disabled>인증 완료</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $modal_count = 0;
        if ($simple_avg != 0) {
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
                                    <table class="table caption-top">
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
                                                        $hostname = "db.iruri.gabia.io";
                                                        $user = "iruri";
                                                        $password = "iruridb3307";
                                                        $dbname = "dbiruri";

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

                                                        $sort = array();

                                                        foreach ((array) $dept_final_result as $key => $value) {

                                                            $sort[$key] = $value[0] - 0.1 * $value[5];
                                                        }

                                                        array_multisort($sort, SORT_DESC, $dept_final_result);

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
                                                        <table class="table mb-0 table-hover caption-top">
                                                            <caption>현제 학생의 성적을 고려하여 가작 적합한 학과를 최대 10개 보여드립니다.</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">합격예측</th>
                                                                    <th scope="col">전형</th>
                                                                    <th scope="col">모집단위</th>
                                                                    <th scope="col">합격자 평균</th>
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
                                                                    echo "<td>" . round($dept[3], 2) . "</td>";
                                                                    echo "<td>" . round($dept[5], 2) . "</td>";
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
        }
        ?>

        <?php
        $modal_count = 0;
        if ($percentile != -1) {
            foreach ($jungshi_final_result as $result) {
        ?>
                <div class="modal fade" id="modal<?php echo ($modal_count + 1) * 100; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label<?php echo ($modal_count + 1) * 100; ?>">상세 정보</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="result-table table-responsive">
                                    <table class="table caption-top">
                                        <caption>모바일 환경에서는 상하좌우로 스와이프하여 내용을 확인해주세요</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">학교</th>
                                                <th scope="col">합격자 평균</th>
                                                <th scope="col">합격예측</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $result[1]; ?></td>
                                                <td><?php echo round($result[2], 2) . "%"; ?></td>
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
                                                        $hostname = "db.iruri.gabia.io";
                                                        $user = "iruri";
                                                        $password = "iruridb3307";
                                                        $dbname = "dbiruri";

                                                        $database = mysqli_connect(
                                                            $hostname,
                                                            $user,
                                                            $password,
                                                            $dbname
                                                        );

                                                        if (!$database) {
                                                            die("데이터베이스 연결 실패 [ERROR] : " . mysqli_connect_error());
                                                        }

                                                        $sql = "SELECT * FROM sushi_2022_dept WHERE code = '{$result[5]}' AND type = '{$type}'";

                                                        $fetch_all = mysqli_query($database, $sql);

                                                        $dept_list = array();

                                                        while ($row = mysqli_fetch_array($fetch_all)) {

                                                            array_push($dept_list, $row);
                                                        }

                                                        mysqli_close($database);

                                                        $dept_result_list = array();

                                                        foreach ($dept_list as $dept) {

                                                            $gap = $percentile - $dept['jungshi'];
                                                            $this_time_result = array($dept['ca'], $dept['dept'], $dept['jungshi'], $gap);
                                                            array_push($dept_result_list, $this_time_result);
                                                        }

                                                        $sort = array();

                                                        foreach ((array) $dept_result_list as $key => $value) {

                                                            $sort[$key] = $value[3];
                                                        }

                                                        array_multisort($sort, SORT_ASC, $dept_result_list);

                                                        $dept_final_result = array();

                                                        foreach ($dept_result_list as $data) {
                                                            if ($data[3] > 2.0) $posi = 0;
                                                            elseif ($data[3] > 0) $posi = 1;
                                                            elseif ($data[3] > -1.0) $posi = 2;
                                                            else $posi = 3;

                                                            $arr_to_push = array($posi, $data[0], $data[1], $data[2], $data[3]);
                                                            array_push($dept_final_result, $arr_to_push);
                                                        }

                                                        $sort = array();

                                                        foreach ((array) $dept_final_result as $key => $value) {

                                                            $sort[$key] = $value[0] + 0.1 * $value[3];
                                                        }

                                                        array_multisort($sort, SORT_DESC, $dept_final_result);

                                                        $index = 0;
                                                        $dept_count = sizeof($dept_final_result);
                                                        $final_result = array();

                                                        if ($dept_count >= 10) {

                                                            foreach ($dept_final_result as $dept) {

                                                                if ($dept[4] < 0.0) {
                                                                    if ($index == $dept_count - 7) break;
                                                                    $index++;
                                                                    continue;
                                                                } elseif ($dept[4] >= 0.0) break;
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
                                                        <table class="table mb-0 table-hover caption-top">
                                                            <caption>현제 학생의 성적을 고려하여 가작 적합한 학과를 최대 10개 보여드립니다.</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">합격예측</th>
                                                                    <th scope="col">전형</th>
                                                                    <th scope="col">모집단위</th>
                                                                    <th scope="col">합격자 평균</th>
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
                                                                    echo "<td>" . $dept[3] . "%" . "</td>";
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
        }
        ?>
    </main>


    <?php require "./module/footer.php" ?>

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <script>
        function getCookie(name) {
            var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return value ? value[2] : null;
        }

        function openmodal(modalcode) {
            var cookie = getCookie("authid");
            var contentmodal = new bootstrap.Modal(document.getElementById("modal" + String(modalcode)));

            if (cookie != null) {
                authmodal.hide();
                contentmodal.show();
                return false;
            } else {
                thistimemodal = modalcode;
                authmodal.show();
                return false;
            }
        }

        const authmodal = new bootstrap.Modal(document.getElementById("authmodal"));
        var thistimemodal;
    </script>

    <script>
        var autoHypenPhone = function(str) {
            str = str.replace(/[^0-9]/g, '');
            var tmp = '';
            if (str.length < 4) {
                return str;
            } else if (str.length < 7) {
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3);
                return tmp;
            } else if (str.length < 11) {
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3, 3);
                tmp += '-';
                tmp += str.substr(6);
                return tmp;
            } else {
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3, 4);
                tmp += '-';
                tmp += str.substr(7);
                return tmp;
            }

            return str;
        }

        var phoneNum = document.getElementById('pnumber');

        phoneNum.onkeyup = function() {
            this.value = autoHypenPhone(this.value);
        }

        $("#sendbtn").attr("disabled", true);
        $("#agreecbox").on('click', function() {
            var chk = $('input:checkbox[id="agreecbox"]').is(":checked");
            if (chk == true) {
                $("#sendbtn").removeAttr('disabled');
            } else {
                $("#sendbtn").attr("disabled", true);
            }
        });

        function smssend() {
            var gradesel = $("#gradesel option:selected").val();

            if (gradesel == -1) {
                alert("학생의 학년을 반드시 선택해 주세요.");
                return false;
            }

            pnumber = $("#pnumber").val();

            $.ajax({
                url: "./module/auth_send.php",
                type: "POST",
                dataType: "json",
                data: {
                    pnum: $("#pnumber").val()
                }
            }).done(function(data) {
                authcode = data.authcode;
                if (data.authresult != 1) {
                    if (data.authresult == 999)
                        alert("악용 방지를 위해 오늘은 더이상 인증 문자를 요청하실 수 없습니다.");
                } else {
                    $("#pnumber").attr("disabled", true);
                    $("#agreecbox").attr("disabled", true);
                    $("#sendbtn").attr("disabled", true);
                    alert("인증 문자 전송이 완료되었습니다. 인증 번호를 입력해주세요.");
                    $("#authcode").removeAttr('disabled');
                    $("#checkbtn").removeAttr('disabled');
                }
            });

            return false;
        }

        function codeauth() {
            var code = $("#authcode").val();
            var gradesel = $("#gradesel option:selected").val();

            if (code == authcode) {
                alert("인증이 완료되었습니다.");
                $.ajax({
                    url: "./module/auth_confirm.php",
                    type: "POST",
                    data: {
                        pnum: pnumber,
                        grade: gradesel
                    }
                }).done(function(data) {
                    if (data != 1) {
                        alert("권한 발급에 문제가 발생했습니다. 다시 시도해주세요.");
                    } else {
                        openmodal(thistimemodal);
                    }
                });
            } else {
                alert("인증 번호가 올바르지 않습니다.");
                $("#pnumber").removeAttr('disabled');
                $("#sendbtn").removeAttr('disabled');
            }

            return false;
        }

        var authcode;
        var pnumber;
    </script>
</body>

</html>