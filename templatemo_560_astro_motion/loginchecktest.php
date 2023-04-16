<?php


 $account=$_POST['account'];
 $password=$_POST['password'];
 echo $account , $password;

 $link = mysqli_connect('localhost','root','12345678','fjufreedge');
 $sql = "select distinct * from login where account = '$account' and password = '$password'";
 $result = mysqli_query($link, $sql);
 if($row = mysqli_fetch_assoc($result))
 {
session_start();
   $_SESSION['name'] = $row['name'];
   $_SESSION['password'] = $row['password'];
   $_SESSION['level'] = $row['level'];

   header("location:index.php?method=message&message=登入成功");
 }
 else
 {
   header("location:index.php?method=message&message=登入失敗");
 }
?>