<?php session_start(); ?>

<?php

unset($_SESSION['user-id']);
echo "<script>location.replace('./index.php')</script>";
