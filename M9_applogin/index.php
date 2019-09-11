<?php
/**
 * Khởi động sessin=on trong php
 */
session_start();
/**
 * Kiểm tra xem người dùng đã đăng nhập hay chưa
 * nếu chưa đăng nhập chúng ta redirect về trang login.php
 */
if (!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true)) {
    // chuyển hướng redirect trong php sử dụng hàm header
    header("Location: login.php");
    exit;
}

/**
 * nếu đã đăng nhập thành công
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="containar">
    <div class="row">
        <div class="col-nd-12">
            <h1>Đăng nhập thành công </h1>
            <p>Tên người dùng : </p>
            <p><a href="">Đăng xuất</a></p>
        </div>
    </div>
</div>
</body>
</html>