<?php
    session_start();
    $_SESSION["loginn"] = $_SESSION["login"];
    if(!$_SESSION['email']){
        header("location: login.php");
    }
?>