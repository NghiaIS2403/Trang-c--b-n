<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In </title>
    <link rel="stylesheet" href="stlye.css" />
    <link rel="icon" type="image/x-icon" href="logo.png">
  </head>
  <body>
    <?php
      include "index.php";
    ?>
    <div class="login-container">
      <form action="xulydangnhap.php" method="post">
        <h2>Login</h2>
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="error-messege">
        <?php
        if (isset($_GET['error']) && $_GET['error'] == '1') {
          echo '<p class="error-message">Tên người dùng hoặc mật khẩu không chính xác.</p>';
        }
        ?>
        </div>
        <button type="submit" name ="submit">Login</button>
      </form>
    </div>
  </body>
</html>
