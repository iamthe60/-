<?php
session_start();

$conn = new mysqli('localhost', 'root','12345678', 'fjufreedge');

$selected_items = $_POST['selected_item'];
$items = explode(",", $selected_items);

foreach ($items as $item) {
    $find_query = "SELECT area, amount FROM item WHERE name = '$item';";
    $find_result = mysqli_query($conn, $find_query);
    $row = mysqli_fetch_assoc($find_result);

    if ($row['area'] == '1') {
        $value = $row['amount'] - 1;
        $update_query = "UPDATE item SET amount = '$value' WHERE name = '$item';";
        mysqli_query($conn, $update_query);
        header("Location: item2.php");
    } elseif ($row['area'] == '2') {
        $value = $row['amount'] - 1;
        $update_query = "UPDATE item SET amount = '$value' WHERE name = '$item';";
        mysqli_query($conn, $update_query);
        header("Location: item3.php");
    } else {
        $value = $row['amount'] - 1;
        $update_query = "UPDATE item SET amount = '$value' WHERE name = '$item';";
        mysqli_query($conn, $update_query);
        header("Location: college.php");
    }
}
?>

