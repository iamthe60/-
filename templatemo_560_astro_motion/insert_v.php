<?php
    $name=$_GET['name'];
    $id=$_GET['id'];
    $time=$_GET['time'];
    $date=$_GET['date'];
    $location=$_GET['location'];
    $link = mysqli_connect('localhost','root','e20030225','fjufreedge');
    $sql="INSERT INTO `volunteer`(`id`, `name`, `time`, `date`, `location`) VALUES ('$id','$name','$time','$date','$location')";
    $rs = mysqli_query($link,$sql);
    if($rs)
    {
      header("Location:index.php?message='success'");
    }
    else
    {
      header("Location:index.php?message='fail'");
    }
      
?>