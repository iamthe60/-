<?php
session_start();
include('conn.php');

if (isset($_POST["title"]) && isset($_POST["start"]) && isset($_POST["end"])) {
    $title = $_POST["title"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    $countQuery = "SELECT COUNT(start_event) AS COUNT FROM events WHERE start_event = :start";
    $insertQuery = "INSERT INTO events (title, start_event, end_event) VALUES (:title, :start_event, :end_event)";

    $statement = $connect->prepare($countQuery);
    $statement->bindParam(':start', $start);
    $statement->execute();
    $countResult = $statement->fetch(PDO::FETCH_ASSOC);
    $count = $countResult['COUNT'];
    
    $id = $_POST["id"];

   $existingQuery = "SELECT COUNT(*) AS COUNT FROM events WHERE id != :id AND (start_event BETWEEN :start AND :end OR end_event BETWEEN :start AND :end)";
       $existingStatement = $connect->prepare($existingQuery);
$existingStatement->bindParam(':id', $id);
$existingStatement->bindParam(':start', $start);
$existingStatement->bindParam(':end', $end);
$existingStatement->execute();
$existingResult = $existingStatement->fetch(PDO::FETCH_ASSOC);
$existingCount = $existingResult['COUNT'];

if ($existingCount > 0) {
    echo "該時間段已排班";
    exit;
}

    if ($count < 2) {
        $insertStatement = $connect->prepare($insertQuery);
        $insertStatement->bindParam(':title', $title);
        $insertStatement->bindParam(':start_event', $start);
        $insertStatement->bindParam(':end_event', $end);
        $insertStatement->execute();

        if ($insertStatement->rowCount() > 0) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "已額滿";
    }

}
?>