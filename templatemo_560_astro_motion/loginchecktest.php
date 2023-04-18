<?php

session_start();
 $account=$_POST['account'];
 $password=$_POST['password'];


 $link = mysqli_connect('localhost','root','','fjufreedge');
 $sql = "select distinct * from login where account = '$account' and password = '$password'";
 $result = mysqli_query($link, $sql);
 if($row = mysqli_fetch_assoc($result))
 {

   $_SESSION['account'] = $row['account'];
   $_SESSION['password'] = $row['password'];
   $_SESSION['level'] = $row['level'];

   header("location:index.php?method=message&message=登入成功");
 }
 else
 {
   header("location:index.php?method=message&message=登入失敗");
 }
?>