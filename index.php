<!doctype html>
<html lang="ko" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <title>UNDER DEV - Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

    <!-- Begin page content -->

    <?php
    $cur_page = "index";
    require "./module/navbar.php";
    ?>

    <main class="flex-shrink-0">

        <div class="container-fluid px-4">

            <div class='row'>

                <div class="content-main col-md-8 bg-light border rounded-3">

                    <h1>대학 합격 예측기</h1>

                    <p class="lead">
                        학생의 기본 정보와 내신 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시 전형 추천 대학을 보여드립니다.<br>
                        (구형 웹 브라우저인 인터넷 익스플로러에서는 작동이 불가능하니 크롬, 엣지, 웨일 등의 최신 브라우저를 이용해주세요.)
                    </p>

                    <div class="collapse multi-collapse-a multi-collapse-b show">
                        <div class="row align-items-md-stretch">
                            <div class="col-md-6">
                                <div class="h-100 p-5 text-white bg-dark border rounded-3 position-relative">
                                    <h2>대학교 기준</h2>
                                    <p>입력한 내신과 정시 등급을 기준으로 전체 대학교 목록에서 합격 가능성을 표시합니다.</p>
                                    <button class="btn btn-primary stretched-link" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse-a">학교 보러가기</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="h-100 p-5 bg-light border rounded-3 position-relative">
                                    <h2>학과 기준</h2>
                                    <p>원하는 1지망 2지망 학과를 선택하여 해당 학과를 기준으로 출력합니다.</p>
                                    <button class="btn btn-primary stretched-link" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse-b">학과 보러가기</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collapse multi-collapse-a" id="university-input">
                        <button class="btn-close" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse-a"></button>
                        <div class="accordion" id="PrivacyInfo">
                            <div class="accordion-item">

                                <h2 class="accordion-header" id="FirstHeader">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FirstContent" aria-expanded="false" aria-controls="FirstContent">
                                        개인정보 제공 및 활용 동의
                                    </button>
                                </h2>

                                <div id="FirstContent" class="accordion-collapse collapse" aria-labelledby="FirstHeader" data-bs-parent="#PrivacyInfo">
                                    <div class="accordion-body">
                                        본 합격 예측기가 수집하는 개인정보는 학생의 성별, 학년, 성적 등의 정보이며 추가로 사이트의 원활한 동작을 위해 접속 정보 등을 수집합니다.
                                        이외 민감한 개인정보는 수집 대상이 아니며 사용한 모든 정보는 오직 성적 분석 및 합격 예측에만 사용됩니다.
                                        이용자는 합격 예측기를 사용하기 전, 언제나 동의하지 않을 권리가 있으며 이 경우 합격 예측이 불가능합니다.
                                        수집한 정보 중 일부는 더 정확한 정보를 이용자에게 제공하기 위한 분석 자료로 보관되며 외부인이 볼 수 없도록 안전하게 저장됩니다.
                                        아래 동의 버튼을 누르고 성적 등 정보를 입력하면, 이용자가 본 개인 정보 제공 및 활용에 동의하였다고 간주합니다.
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" data-bs-toggle="collapse" href="#grade-input-u" value="" id="flexCheckDefault" autocomplete="off">
                            <label class="form-check-label" for="flexCheckDefault">
                                개인정보 제공 및 활용에 동의합니다
                            </label>
                        </div>

                        <div class="grade-input-u collapse show" id="grade-input">
                            <div class="card card-body">
                                동의를 선택해야 성적을 입력하실 수 있습니다.
                            </div>
                        </div>

                        <div class="grade-input-u collapse" id="grade-input">

                            <div class="card card-body">
                                <br>
                                <form name="input-form" id="input-form" method="POST" action="./result.php" autocomplete="off">
                                    <div class="gender-type container">

                                        <div class="row">

                                            <div class="col-md">
                                                <h5>성별</h5>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender-radio" id="radio-male" value="1" checked>
                                                    <label class="form-check-label" for="radio-male">남자</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender-radio" id="radio-female" value="2">
                                                    <label class="form-check-label" for="radio-female">여자</label>
                                                </div>

                                            </div>

                                            <div class="col-md">
                                                <h5>계열</h5>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type-radio" id="radio-natural" value="1" checked>
                                                    <label class="form-check-label" for="radio-male">인문</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type-radio" id="radio-literature" value="2">
                                                    <label class="form-check-label" for="radio-female">자연</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <div class="row gy-3">
                                        <div class="col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="ig-first-label">1학년 평균</span>
                                                <input type="text" class="form-control form-control-sm text-center" name="first" placeholder="1.0">
                                            </div>
                                        </div>

                                        <div class="col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="ig-second-label">2학년 평균</span>
                                                <input type="text" class="form-control form-control-sm text-center" name="second" placeholder="1.0">
                                            </div>
                                        </div>

                                        <div class="col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="ig-third-label">3학년 평균</span>
                                                <input type="text" class="form-control form-control-sm text-center" name="third" placeholder="1.0">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 d-grid gap-2">
                                            <a class="btn btn-primary justify-content-md-end" href="./calc" role="button">등급 계산기 바로가기</a>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="korean-label">국어&nbsp;&nbsp;</span>
                                                <select class="form-select" id="korean-type">
                                                    <option value="0" selected>화법과작문</option>
                                                    <option value="1">언어와매체</option>
                                                </select>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="math-label">수학&nbsp;&nbsp;</span>
                                                <select class="form-select" id="math-type">
                                                    <option value="0" selected>확률과통계</option>
                                                    <option value="1">미적분</option>
                                                    <option value="2">기하</option>
                                                </select>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="math-label">영어&nbsp;&nbsp;</span>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="math-label">한국사</span>
                                                <select class="form-select" id="math-type">
                                                    <option value="0" selected>확률과통계</option>
                                                    <option value="1">미적분</option>
                                                    <option value="2">기하</option>
                                                </select>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="math-label">탐구 1</span>
                                                <select class="form-select" id="math-type">
                                                    <option value="0" selected>확률과통계</option>
                                                    <option value="1">미적분</option>
                                                    <option value="2">기하</option>
                                                </select>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="math-label">탐구 2</span>
                                                <select class="form-select" id="math-type">
                                                    <option value="0" selected>확률과통계</option>
                                                    <option value="1">미적분</option>
                                                    <option value="2">기하</option>
                                                </select>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="math-label">제2외국어</span>
                                                <select class="form-select" id="math-type">
                                                    <option value="0" selected>확률과통계</option>
                                                    <option value="1">미적분</option>
                                                    <option value="2">기하</option>
                                                </select>
                                                <select class="form-select" id="korean-grade" name="korean-grade">
                                                    <option selected value="0">미응시</option>
                                                    <option value="1">1등급</option>
                                                    <option value="2">2등급</option>
                                                    <option value="3">3등급</option>
                                                    <option value="4">4등급</option>
                                                    <option value="5">5등급</option>
                                                    <option value="6">6등급</option>
                                                    <option value="7">7등급</option>
                                                    <option value="8">8등급</option>
                                                    <option value="9">9등급</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-outline-primary" onclick="test_input()">
                                            완료
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="collapse multi-collapse-b" id="department-input">
                        <button class="btn-close" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse-b"></button>
                        <div class="accordion" id="PrivacyInfo">
                            <div class="accordion-item">

                                <h2 class="accordion-header" id="FirstHeader">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FirstContent" aria-expanded="false" aria-controls="FirstContent">
                                        개인정보 제공 및 활용 동의
                                    </button>
                                </h2>

                                <div id="FirstContent" class="accordion-collapse collapse" aria-labelledby="FirstHeader" data-bs-parent="#PrivacyInfo">
                                    <div class="accordion-body">
                                        본 합격 예측기가 수집하는 개인정보는 학생의 성별, 학년, 성적 등의 정보이며 추가로 사이트의 원활한 동작을 위해 접속 정보 등을 수집합니다.
                                        이외 민감한 개인정보는 수집 대상이 아니며 사용한 모든 정보는 오직 성적 분석 및 합격 예측에만 사용됩니다.
                                        이용자는 합격 예측기를 사용하기 전, 언제나 동의하지 않을 권리가 있으며 이 경우 합격 예측이 불가능합니다.
                                        수집한 정보 중 일부는 더 정확한 정보를 이용자에게 제공하기 위한 분석 자료로 보관되며 외부인이 볼 수 없도록 안전하게 저장됩니다.
                                        아래 동의 버튼을 누르고 성적 등 정보를 입력하면, 이용자가 본 개인 정보 제공 및 활용에 동의하였다고 간주합니다.
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" data-bs-toggle="collapse" href="#grade-input-d" value="" id="flexCheckDefault" autocomplete="off">
                            <label class="form-check-label" for="flexCheckDefault">
                                개인정보 제공 및 활용에 동의합니다
                            </label>
                        </div>

                        <div class="grade-input-d collapse show" id="grade-input">
                            <div class="card card-body">
                                동의를 선택해야 성적을 입력하실 수 있습니다.
                            </div>
                        </div>

                        <div class="grade-input-d collapse" id="grade-input">

                            <div class="card card-body">
                                <br>
                                <form name="input-form" id="input-form" method="POST" action="./result.php" autocomplete="off">
                                    <div class="gender-type container">

                                        <div class="row">

                                            <div class="col-md">
                                                <h5>성별</h5>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender-radio" id="radio-male" value="1" checked>
                                                    <label class="form-check-label" for="radio-male">남자</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender-radio" id="radio-female" value="2">
                                                    <label class="form-check-label" for="radio-female">여자</label>
                                                </div>

                                            </div>

                                            <div class="col-md">
                                                <h5>계열</h5>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type-radio" id="radio-natural" value="1" checked>
                                                    <label class="form-check-label" for="radio-male">인문</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type-radio" id="radio-literature" value="2">
                                                    <label class="form-check-label" for="radio-female">자연</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <div class="row gy-3">
                                        <div class="col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="ig-first-label">1학년 평균</span>
                                                <input type="text" class="form-control form-control-sm text-center" name="first" placeholder="1.0">
                                            </div>
                                        </div>

                                        <div class="col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="ig-second-label">2학년 평균</span>
                                                <input type="text" class="form-control form-control-sm text-center" name="second" placeholder="1.0">
                                            </div>
                                        </div>

                                        <div class="col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="ig-third-label">3학년 평균</span>
                                                <input type="text" class="form-control form-control-sm text-center" name="third" placeholder="1.0">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 d-grid gap-2">
                                            <a class="btn btn-primary justify-content-md-end" href="./calc" role="button">등급 계산기 바로가기</a>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="korean-label">국어</span>
                                        <select class="form-select" id="korean-type">
                                            <option value="0" selected>화법과작문</option>
                                            <option value="1">언어와매체</option>
                                        </select>
                                        <select class="form-select" id="korean-grade" name="korean-grade">
                                            <option selected value="0">미응시</option>
                                            <option value="1">1등급</option>
                                            <option value="2">2등급</option>
                                            <option value="3">3등급</option>
                                            <option value="4">4등급</option>
                                            <option value="5">5등급</option>
                                            <option value="6">6등급</option>
                                            <option value="7">7등급</option>
                                            <option value="8">8등급</option>
                                            <option value="9">9등급</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="math-label">수학</span>
                                        <select class="form-select" id="math-type">
                                            <option value="0" selected>확률과통계</option>
                                            <option value="1">미적분</option>
                                            <option value="2">기하</option>
                                        </select>
                                        <select class="form-select" id="korean-grade" name="korean-grade">
                                            <option selected value="0">미응시</option>
                                            <option value="1">1등급</option>
                                            <option value="2">2등급</option>
                                            <option value="3">3등급</option>
                                            <option value="4">4등급</option>
                                            <option value="5">5등급</option>
                                            <option value="6">6등급</option>
                                            <option value="7">7등급</option>
                                            <option value="8">8등급</option>
                                            <option value="9">9등급</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="math-label">영어</span>
                                        <select class="form-select" id="korean-grade" name="korean-grade">
                                            <option selected value="0">미응시</option>
                                            <option value="1">1등급</option>
                                            <option value="2">2등급</option>
                                            <option value="3">3등급</option>
                                            <option value="4">4등급</option>
                                            <option value="5">5등급</option>
                                            <option value="6">6등급</option>
                                            <option value="7">7등급</option>
                                            <option value="8">8등급</option>
                                            <option value="9">9등급</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="math-label">탐구 1</span>
                                        <select class="form-select" id="math-type">
                                            <option value="0" selected>확률과통계</option>
                                            <option value="1">미적분</option>
                                            <option value="2">기하</option>
                                        </select>
                                        <select class="form-select" id="korean-grade" name="korean-grade">
                                            <option selected value="0">미응시</option>
                                            <option value="1">1등급</option>
                                            <option value="2">2등급</option>
                                            <option value="3">3등급</option>
                                            <option value="4">4등급</option>
                                            <option value="5">5등급</option>
                                            <option value="6">6등급</option>
                                            <option value="7">7등급</option>
                                            <option value="8">8등급</option>
                                            <option value="9">9등급</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="math-label">탐구 2</span>
                                        <select class="form-select" id="math-type">
                                            <option value="0" selected>확률과통계</option>
                                            <option value="1">미적분</option>
                                            <option value="2">기하</option>
                                        </select>
                                        <select class="form-select" id="korean-grade" name="korean-grade">
                                            <option selected value="0">미응시</option>
                                            <option value="1">1등급</option>
                                            <option value="2">2등급</option>
                                            <option value="3">3등급</option>
                                            <option value="4">4등급</option>
                                            <option value="5">5등급</option>
                                            <option value="6">6등급</option>
                                            <option value="7">7등급</option>
                                            <option value="8">8등급</option>
                                            <option value="9">9등급</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-outline-primary" onclick="test_input()">
                                            완료
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="card card-body">
                        <h5 class="pb-3 mb-3 border-bottom">예측 단계 안내</h5>
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
                        <p>2022 수시 전형 모의 예측이므로 예측 결과는 실제 결과와 다를 수 있으나 최선의 예측을 제공해드리려 노력하겠습니다.</p>
                    </div>
                </div>

                <div class='content-sidebar col-md-4 d-none d-md-block sticky-md-top'>
                    <div class="card">
                        <div class="card-header">
                            <h5>등급 안내</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">내신 등급 비율 안내</h5>
                            <p class="card-text">비율을 참고하여 등급을 입력해주세요.</p>
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
                        최소 하나 이상의 등급을 입력해주세요.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal()">확인</button>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <?php require "./module/footer.php" ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/valid.js"></script>

</body>

</html>