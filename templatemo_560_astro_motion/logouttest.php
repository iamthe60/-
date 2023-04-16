<?php
session_start();
$_SESSION['account']="";
$_SESSION['password']="";
$_SESSION['level']="";
header("location:index.php?method=message&message=登出成功");
?>