<?php
session_start();
<<<<<<< HEAD

$conn = new mysqli('localhost', 'root', '', 'fjufreedge');

=======
$conn = new mysqli('localhost', 'root','12345678', 'fjufreedge');
>>>>>>> 95b89aa44921c09ae664f4750c57e3dc98f46455
$selected_items = $_POST['selected_item'];
$items =explode(",", $selected_items);
for($i = 0 ;$i <3;$i++){
    $item=$items[$i];
    $find_query = "SELECT area, amount FROM item WHERE name = '$item';";
    $find_result = mysqli_query($conn, $find_query);
    $row = mysqli_fetch_assoc($find_result);
    if ($row['area'] == '1') {
        $value = $row['amount'] - 1;
        $update_query = "UPDATE item SET amount = '$value' WHERE name = '$item';";
        mysqli_query($conn, $update_query);
<<<<<<< HEAD
=======
        header("location:index.php?method=message&message=刪減成功");
>>>>>>> 95b89aa44921c09ae664f4750c57e3dc98f46455
    } elseif ($row['area'] == '2') {
        $value = $row['amount'] - 1;
        $update_query = "UPDATE item SET amount = '$value' WHERE name = '$item';";
        mysqli_query($conn, $update_query);
<<<<<<< HEAD
=======
        header("location:index.php?method=message&message=刪減成功");
>>>>>>> 95b89aa44921c09ae664f4750c57e3dc98f46455
    } else {
        $value = $row['amount'] - 1;
        $update_query = "UPDATE item SET amount = '$value' WHERE name = '$item';";
        mysqli_query($conn, $update_query);
<<<<<<< HEAD
    }
}

mysqli_close($conn);
header("Location: college.php");
exit();
=======
        header("location:index.php?method=message&message=刪減成功");
    }
}

>>>>>>> 95b89aa44921c09ae664f4750c57e3dc98f46455
?>


