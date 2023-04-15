<?php
    if(!empty($_GET['foodaction'])){
        $foodaction = $_GET['foodaction'];
        $num = $_GET['num'];
        $name = $_GET['name'];
        $amount = $_GET['amount'];
        $area = $_GET['area'];

        if($foodaction =="上傳"){
            $link = mysqli_connect('localhost','root','','fjufreedge');
            $sql = "UPDATE `item` SET amount='$amount' where num = '$num';";
            $result = mysqli_query($link, $sql);
            $row=mysqli_fetch_assoc($result);
            if(mysqli_query($link,$sql))
            {
                header("Location: message.php?message=上傳完成");
               
            }
            else
            {
                header("Location: message.php?message=上傳失敗");
                
            }
        }else{
            $sql = "UPDATE `item` SET amount='0' where num = '$num';";
        }
    }





?>