<?php
session_start();
$_SESSION['id']="";
$_SESSION['name']="";
$_SESSION['password']="";
$_SESSION['level']="";
header("location:index.php?method=message&message=登出系統");
?>