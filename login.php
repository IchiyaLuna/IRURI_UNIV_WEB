<!doctype html>
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
    <form>
      <img class="mb-4" src="../assets/webp/logo_green.webp" alt="" width="72" height="72">
      <h1 class="h3 mb-3 fw-normal">관리자 로그인</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="ID">
        <label for="floatingInput">아이디</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">패스워드</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 로그인 상태 유지
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">로그인</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>

</body>
</html>