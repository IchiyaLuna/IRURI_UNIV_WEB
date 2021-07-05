<!doctype html>
<html lang="ko" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">
    <title>UNDER DEV - Calc Page</title>

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
                        <a class="nav-link" href="./calc">성적 계산기</a>
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

                    <h1>내신 등급 계산기</h1>

                    <p class="lead">학생의 내신 성적을 입력하시면 내신 등급을 계산합니다.</p>

                    <div class="card card-body">
                        <h5 class="pb-3 mb-3 border-bottom">응애 나 아기계산기</h5>
                        <p>성적줘 응애.</p>
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
                        최소 하나 이상의 등급을 입력해주세요.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal()">확인</button>
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

    <script launguage='text/javascript'>
        var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'))
        var resultpage = document.getElementById('input-form')

        function test_input() {

            var fk = document.getElementById("first-korean")
            fk = fk.options[fk.selectedIndex].value
            var fm = document.getElementById("first-math")
            fm = fm.options[fm.selectedIndex].value
            var fe = document.getElementById("first-english")
            fe = fe.options[fe.selectedIndex].value
            var fh = document.getElementById("first-history")
            fh = fh.options[fh.selectedIndex].value
            var fso = document.getElementById("first-social")
            fso = fso.options[fso.selectedIndex].value
            var fsc = document.getElementById("first-science")
            fsc = fsc.options[fsc.selectedIndex].value

            var fsum = fk + fm + fe + fh + fso + fsc

            var sk = document.getElementById("second-korean")
            sk = sk.options[sk.selectedIndex].value
            var sm = document.getElementById("second-math")
            sm = sm.options[sm.selectedIndex].value
            var se = document.getElementById("second-english")
            se = se.options[se.selectedIndex].value
            var sh = document.getElementById("second-history")
            sh = sh.options[sh.selectedIndex].value
            var sso = document.getElementById("second-social")
            sso = sso.options[sso.selectedIndex].value
            var ssc = document.getElementById("second-science")
            ssc = ssc.options[ssc.selectedIndex].value

            var ssum = sk + sm + se + sh + sso + ssc

            var tk = document.getElementById("third-korean")
            tk = tk.options[tk.selectedIndex].value
            var tm = document.getElementById("third-math")
            tm = tm.options[tm.selectedIndex].value
            var te = document.getElementById("third-english")
            te = te.options[te.selectedIndex].value
            var th = document.getElementById("third-history")
            th = th.options[th.selectedIndex].value
            var tso = document.getElementById("third-social")
            tso = tso.options[tso.selectedIndex].value
            var tsc = document.getElementById("third-science")
            tsc = tsc.options[tsc.selectedIndex].value

            var tsum = tk + tm + te + th + tso + tsc

            var sum = fsum + ssum + tsum

            if (sum == 0) {
                noinput_modal.show()
            } else {
                resultpage.submit()
            }
            return false
        }

        function close_modal() {
            noinput_modal.hide()
            return false
        }
    </script>

</body>

</html>