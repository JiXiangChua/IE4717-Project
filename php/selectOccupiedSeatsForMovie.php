<?php

include('connectDB.php');

$location = $_SESSION['location'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];

$date = str_replace(" ", "", $date); //convert to db formatting

// var_dump($_SESSION);

$query = "SELECT seatNumber from occupiedSeats 
    INNER JOIN movieSessions ON occupiedSeats.sessionid = movieSessions.sessionid 
    WHERE screeningLocation = '$location'
    AND screeningDate = '$date'
    AND screeningTime = '$time'";

$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->get_result();
$num_results = $results->num_rows;

$occupiedSeats = array();

for ($i = 0; $i < $num_results; $i++)
{
    $row = $results->fetch_assoc();
    array_push($occupiedSeats, $row["seatNumber"]);
}

$occupiedSeatsString = implode("-", $occupiedSeats);

?>