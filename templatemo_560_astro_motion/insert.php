<?php
session_start();
include('conn.php');

if (isset($_POST["title"]) && isset($_POST["start"]) && isset($_POST["end"])) {
    $title = $_POST["title"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    $countQuery = "SELECT COUNT(start_event) AS COUNT FROM events WHERE start_event = :start";
    $selectQuery = "SELECT COUNT(*) AS COUNT FROM events WHERE title = :title AND start_event = :start";
    $insertQuery = "INSERT INTO events (title, start_event, end_event) VALUES (:title, :start_event, :end_event)";

    $statement = $connect->prepare($countQuery);
    $statement->bindParam(':start', $start);
    $statement->execute();
    $countResult = $statement->fetch(PDO::FETCH_ASSOC);
    $count = $countResult['COUNT'];

    $statement2 = $connect->prepare($selectQuery);
    $statement2->bindParam(':title', $title);
    $statement2->bindParam(':start', $start);
    $statement2->execute();
    $countResult2 = $statement2->fetch(PDO::FETCH_ASSOC);
    $count2 = $countResult2['COUNT'];
    
    if ($count2 == 1) {
        echo "已排過該時段";
    } else  if ($count < 2){
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