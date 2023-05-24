<?php
include ('conn.php');
$conn = new mysqli('localhost','root','','fjufreedge');
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$count = "SELECT MAX(num) AS total FROM `events`;";
$result = mysqli_query($conn, $count);
$row=mysqli_fetch_assoc($result);
$num = $row['total']+1 ;

if (isset($_POST["title"]))
{
    $query = "
    INSERT INTO `events`(`num`, `id`, `title`, `start_event`, `end_event`)
    VALUES ('$num','$id',:title,:start_event, :end_event)
 "
 
 ;
    $statement = $connect->prepare($query);
    $statement->execute(array(
        ':title' => $_POST['title'],
        ':start_event' => $_POST['start'],
        ':end_event' => $_POST['end']
    ));
}

?>
