<?php
session_start();
include "connect.php";
// Page is set to home (home.php) by default, so when the visitor visits, that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="logo.png" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="home.php">Trang Chủ</a></li>
          <li><a href="sanpham.php">Sản Phẩm</a></li>
          <li><a href="naptien.php">Nạp Tiền</a></li>
          <li><a href="lienhe.php">Liên Hệ</a></li>
          <li><a href="taikhoan.php">Tài Khoản</a></li>
          <li><a href="dangxuat.php">Đăng Xuất</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>
