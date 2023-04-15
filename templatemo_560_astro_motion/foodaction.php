<?php
    if(!empty($_GET['foodaction'])){
        $foodaction = $_GET['foodaction'];
        $amount = $_GET['amount'];
        $num = $_GET['num'];
        if($foodaction =="上傳"){
            $link = mysqli_connect('localhost','root','','fjufreedge');
            $sql = "UPDATE `item` SET `amount`='$amount' WHERE `num`='$num'";
            $result = mysqli_query($link, $sql);
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