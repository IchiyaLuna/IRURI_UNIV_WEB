<!doctype html>
<?php session_start(); ?>

<?php if (isset($_SESSION['user_id'])) {
    echo "<script>location.replace('./admin.php')</script>";
}
?>

<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ichiya Luna">

    <title>UNDER DEV - Admin Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form method="POST" action="./module/check_user.php">
            <img class="mb-4" src="../assets/webp/logo_green.webp" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">관리자 로그인</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="user-id" name="user-id" placeholder="ID">
                <label for="floatingInput">아이디</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="user-pw" name="user-pw" placeholder="Password">
                <label for="floatingPassword">패스워드</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">로그인</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>

        <div class="alert-modal modal fade" id="no-input" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="no-input-label">오류</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        아이디와 비밀번호를 입력해 주세요.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal();">확인</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert-modal modal fade" id="no-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="no-account-label">오류</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        존재하지 않는 계정입니다.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_modal();">확인</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/account.js"></script>
</body>

</html>