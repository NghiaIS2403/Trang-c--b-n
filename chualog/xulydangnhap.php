<?php
    session_start();
    include("conn.php");
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);
    $sql =" SELECT * FROM information WHERE username='$username' and passwordmd = '$password'";
    $result= mysqli_query($conn,$sql);
    if($result && mysqli_num_rows($result) > 0){
        header("Location:../dalog/home.php");
        $_SESSION['username'] = $username;
        setcookie('name','Nghia',time()+3600*60*60);
        exit();
    }
    else header("Location: bangdangnhap.php?error=1");
    

    mysqli_free_result($result);

    mysqli_close($conn);
?>