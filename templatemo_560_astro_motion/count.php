<?php
if(isset($_POST['submitButton'])){
$name = $_POST['submitButton'];
$conn = new mysqli('localhost','root','12345678','fjufreedge');
$find = "SELECT area from item where name = '$name';";
$find_result = mysqli_query($conn,$find);
$row = mysqli_fetch_assoc($find_result);
if($row['area']=='1'){
    $query = "SELECT amount from item where name = '$name';";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $value = $row['amount']-1;
    $updateUser = "UPDATE item SET `amount`='$value' WHERE `name`='$name';";
    mysqli_query($conn,$updateUser);
    if(mysqli_query($conn,$updateUser)){
        header("Location: item2.php");
    }
        
    }elseif($row['area']=='2'){
$query = "SELECT amount from item where name = '$name';";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$value = $row['amount']-1;
$updateUser = "UPDATE item SET `amount`='$value' WHERE `name`='$name';";
mysqli_query($conn,$updateUser);
if(mysqli_query($conn,$updateUser)){
    header("Location: item3.php");
}
    
}else{
$query = "SELECT amount from item where name = '$name';";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$value = $row['amount']-1;
$updateUser = "UPDATE item SET `amount`='$value' WHERE `name`='$name';";
mysqli_query($conn,$updateUser);
if(mysqli_query($conn,$updateUser)){
    header("Location: college.php");
}
}
    }
if(isset($_POST['next_1'])){
    header("Location: item2.php");
}
if(isset($_POST['next_2'])){
    header("Location: item3.php");
}
if(isset($_POST['next_3'])){
    header("Location: college.php");
}


        ?>