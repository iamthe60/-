<?php
session_start();
$id = $_POST['id'];
$password = $_POST['password'];
$link = mysqli_connect('localhost', 'root','', 'fjufreedge');
$sql = "select distinct * from login where id = '$id' and password = '$password'";
$result = mysqli_query($link, $sql);
if ($row = mysqli_fetch_assoc($result)) {
  $_SESSION['id'] = $row['id'];
  $_SESSION[''] = $row['password'];
  $_SESSION['level'] = $row['level'];
  header("location:volunteer.php?method=message&message=登入成功");
} else {
  header("location:volunteer.php?method=message&message=登入失敗");
}
?>