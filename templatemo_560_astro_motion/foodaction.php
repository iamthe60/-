<?php
    if(!empty($_GET['foodaction'])){
        $num = $_GET['num'];
        $image = $_GET['image'];
        $name = $_GET['name'];
        $amount = $_GET['amount'];
        $area = $_GET['area'];

        if($foodaction =="update"){
            $link = mysqli_connect('localhost','root','12345678','fjufreedge');
            $sql = "INSERT INTO `item`(`num`, `image`, `name`, `amount`, `area`) VALUES ('$num','$image','$name','$amount','$area');";
            $result = mysqli_query($link, $sql);
            $row=mysqli_fetch_assoc($result);
        }else{
            $sql = "UPDATE `item` SET amount='$amount' where num = '$num';";
        }
    }





?>