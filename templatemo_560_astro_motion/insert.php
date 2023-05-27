<?php
include('conn.php');
$id=$_SESSION['id'];
if (isset($_POST["title"]) && isset($_POST["start"]) && isset($_POST["end"])) {
    $title = $_POST["title"];
    $start = $_POST["start"];
    $end = $_POST["end"];




    $count = "SELECT COUNT(start_event) AS COUNT FROM events WHERE start_event='$start';";	
    $link = mysqli_connect('localhost','root','12345678','fjufreedge');

    $result = mysqli_query($link, $count);
    $row = mysqli_fetch_assoc($result);
     if($row['COUNT'] < 2){
    
     
    $query = "INSERT INTO events (title, start_event, end_event) VALUES (:title, :start_event, :end_event)";
    $statement = $connect->prepare($query);
    $statement->execute(array(
        ':title' => $id." ".$title,
        ':start_event' => $start,
        ':end_event' => $end
    ));

    // 檢查是否成功插入事件
    $count = $statement->rowCount();
    if ($count > 0) {
        echo "success";
    } else {
        echo "error";
    }

}else{



}





}
?>