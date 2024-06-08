<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include("index.html");
?>
<div class="login-container">
    <form action="save_user.php" method="POST">
        <h2>Thông Tin Nhận Hàng</h2>
        <div class="input-group">
            <label for="name">Họ và tên</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="phone">Số điện thoại 1</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="input-group">
            <label for="phone">Số điện thoại 2</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="input-group">
            <label for="address">Địa chỉ</label>
            <input type="text" id="address" name="address" required>
        </div>
        <button type="submit">Gửi</button>
    </form>
</div>
</body>
</html>