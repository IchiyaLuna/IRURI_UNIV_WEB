<!doctype html>
<html lang="ko" class="h-100">

<?php require "./module/get_post_dept.php"; ?>

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
                                        <th scope="col">선택 분야</th>
                                        <th scope="col">단순 평균</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $type; ?></td>
                                        <td>
                                            <?php
                                            switch ($deptwant) {
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
                                                                    <th scope="col">전형</th>
                                                                    <th scope="col">모집단위</th>
                                                                    <th scope="col">합격자 평균</th>
                                                                    <th scope="col">등급 간 차이</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
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
                                                                    echo "<td>" . $result[6] . "</td>";
                                                                    echo "</tr>";
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
                                                                    <th scope="col">전형</th>
                                                                    <th scope="col">모집단위</th>
                                                                    <th scope="col">합격자 평균</th>
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
                                                                    echo "</tr>";
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