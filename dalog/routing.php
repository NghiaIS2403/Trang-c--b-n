<?php
    session_start();
    if( !isset($_SESSION["username"])){
        header("location:../chualog/bangdangnhap.php");
    }
    // Mặc định trang sẽ được thiết lập là trang chủ (home.php), vì vậy khi khách truy cập, đó sẽ là trang họ thấy.
    $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';

    // Bao gồm và hiển thị trang được yêu cầu
    include $page . '.php'; 
?>