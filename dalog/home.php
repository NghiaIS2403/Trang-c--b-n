<?php
    session_start();
    if( !isset($_SESSION["username"])){
         header("location:../chualog/bangdangnhap.php");
    }
    include "index.html";
    include "producthome.php";
?>

