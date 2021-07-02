<!doctype html>
<html lang="ko" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <title>UNDER DEV - Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->

    <link href="main.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

    <!-- Begin page content -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="navbar-main">

        <div class="container-fluid">

            <a class="navbar-brand" href="https://workruri.akkyu.net/">이루리 테스트</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index">합격 예측기</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">성적 계산기</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" data-bs-toggle="dropdown" aria-expanded="false">기타</a>

                        <ul class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <li><a class="dropdown-item" href="#">안내</a></li>
                            <li><a class="dropdown-item" href="./login">관리자</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="flex-shrink-0">

        <div class="container-fluid px-4">

            <div class='row'>

                <div class="content-main col-md-8 bg-light border rounded-3">

                    <h1>대학 합격 예측기</h1>

                    <p class="lead">학생의 기본 정보와 내신 성적을 입력하시면 학원의 자체 데이터를 기반으로 수시 전형 추천 대학을 보여드립니다.</p>

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
                        <input class="form-check-input" type="checkbox" data-bs-toggle="collapse" href="#grade-input" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            개인정보 제공 및 활용에 동의합니다
                        </label>
                    </div>
                    <br>
                    <div class="grade-input collapse show" id="grade-input">
                        <div class="card card-body">
                            동의를 선택해야 성적을 입력하실 수 있습니다.
                        </div>
                    </div>

                    <div class="grade-input collapse" id="grade-input">

                        <div class="card card-body">
                            <br>
                            <form name="input-form" method="POST" action="./result.php">
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
                                <div class="first-grade container">
                                    <h5>1학년</h5>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="first-korean" class="form-label">국어</label>
                                            <select class="form-select" id="first-korean" name="first-korean">
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

                                        <div class="col-lg">
                                            <label for="first-math" class="form-label">수학</label>
                                            <select class="form-select" id="first-math" name="first-math">
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

                                        <div class="col-lg">
                                            <label for="first-english" class="form-label">영어</label>
                                            <select class="form-select" id="first-english" name="first-english">
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
                                    <br>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="first-history" class="form-label">한국사</label>
                                            <select class="form-select" id="first-history" name="first-history">
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

                                        <div class="col-lg">
                                            <label for="first-social" class="form-label">사회탐구</label>
                                            <select class="form-select" id="first-social" name="first-social">
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

                                        <div class="col-lg">
                                            <label for="first-science" class="form-label">과학탐구</label>
                                            <select class="form-select" id="first-science" name="first-science">
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
                                <div class="second-grade container">
                                    <h5>2학년</h5>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="second-korean" class="form-label">국어</label>
                                            <select class="form-select" id="second-korean" name="second-korean">
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

                                        <div class="col-lg">
                                            <label for="second-math" class="form-label">수학</label>
                                            <select class="form-select" id="second-math" name="second-math">
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

                                        <div class="col-lg">
                                            <label for="second-english" class="form-label">영어</label>
                                            <select class="form-select" id="second-english" name="second-english">
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
                                    <br>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="second-history" class="form-label">한국사</label>
                                            <select class="form-select" id="second-history" name="second-history">
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

                                        <div class="col-lg">
                                            <label for="second-social" class="form-label">사회탐구</label>
                                            <select class="form-select" id="second-social" name="second-social">
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

                                        <div class="col-lg">
                                            <label for="second-science" class="form-label">과학탐구</label>
                                            <select class="form-select" id="second-science" name="second-science">
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
                                <div class="third-grade container">
                                    <h5>3학년</h5>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="third-korean" class="form-label">국어</label>
                                            <select class="form-select" id="third-korean" name="third-korean">
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

                                        <div class="col-lg">
                                            <label for="third-math" class="form-label">수학</label>
                                            <select class="form-select" id="third-math" name="third-math">
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

                                        <div class="col-lg">
                                            <label for="third-english" class="form-label">영어</label>
                                            <select class="form-select" id="third-english" name="third-english">
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
                                    <br>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="third-history" class="form-label">한국사</label>
                                            <select class="form-select" id="third-history" name="third-history">
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

                                        <div class="col-lg">
                                            <label for="third-social" class="form-label">사회탐구</label>
                                            <select class="form-select" id="third-social" name="third-social">
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

                                        <div class="col-lg">
                                            <label for="third-science" class="form-label">과학탐구</label>
                                            <select class="form-select" id="third-science" name="third-science">
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
                                <br>
                                <div class="d-grid">
                                    <input class="btn btn-outline-primary" type="submit" value="완료">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#no-input">
                                        Launch demo modal
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="card card-body">
                        아 응애애요<br>
                        두번째 내용??<br>
                        응애<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
                        야옹<br>
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
        <div class="modal fade" id="no-input" tabindex="-1" aria-hidden="true">
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
                        <button type="button" class="btn btn-primary">확인</button>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">&copy 2021. Ichiya Luna DEV VERSION</span>
        </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>