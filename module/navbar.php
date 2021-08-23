<!doctype html>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="navbar-main">

    <div class="container-fluid">

        <a class="navbar-brand" href="https://iruriconsulting.com/">
            <img src="./assets/webp/logo_green.webp" width="30" height="30" class="d-inline-block align-top" alt="">
            &nbsp;이루리학원
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">

                <li class="nav-item">
                    <?php
                    if ($cur_page == "index") {
                        echo "<a class='nav-link active' href='./index'>";
                    } else {
                        echo "<a class='nav-link' href='./index'>";
                    }
                    ?>
                    합격 예측기</a>
                </li>

                <li class="nav-item">
                    <?php
                    if ($cur_page == "calc") {
                        echo "<a class='nav-link active' href='./calc'>";
                    } else {
                        echo "<a class='nav-link' href='./calc'>";
                    }
                    ?>
                    성적 계산기</a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" data-bs-toggle="dropdown" aria-expanded="false">기타</a>

                    <ul class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <li><a class="dropdown-item" href="./login">관리자</a></li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>
</nav>