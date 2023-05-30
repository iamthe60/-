<?php
session_start();
include('conn.php');

if (isset($_POST["title"]) && isset($_POST["start"]) && isset($_POST["end"])) {
    $title = $_POST["title"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    $selectQuery = "SELECT COUNT(*) AS COUNT FROM events WHERE title = :title AND start_event = :start";
    $insertQuery = "INSERT INTO events (title, start_event, end_event) VALUES (:title, :start_event, :end_event)";

    $selectStatement = $connect->prepare($selectQuery);
    $selectStatement->bindParam(':title', $title);
    $selectStatement->bindParam(':start', $start);
    $selectStatement->execute();
    $countResult = $selectStatement->fetch(PDO::FETCH_ASSOC);
    $count = $countResult['COUNT'];

    if ($count == 0) {
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
    } 
} 
?>