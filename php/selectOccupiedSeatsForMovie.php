<?php

include('connectDB.php');

$location = $_SESSION['location'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$movieid = $_SESSION['movieid'];
$date = str_replace(" ", "", $date); //convert to db formatting

// var_dump($_SESSION);

$query = "SELECT seatNumber from occupiedSeats 
    INNER JOIN movieSessions ON occupiedSeats.sessionid = movieSessions.sessionid 
    WHERE screeningLocation = '$location'
    AND screeningDate = '$date'
    AND screeningTime = '$time'
    AND movieid = '$movieid'";

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

// Set current movie session id to $_SESSION. If the id doesnt exist, create a new session id to the database and set it as current sessionid in $_SESSION.

$query = "SELECT sessionid from movieSessions
    WHERE screeningLocation = '$location'
    AND screeningDate = '$date'
    AND screeningTime = '$time'
    AND movieid = '$movieid'";

$stmt = $db->prepare($query);
$stmt->execute();
$sessionIdResult = $stmt->get_result();

if ($sessionIdResult->num_rows < 1)
{
    //create new session id in database
    $query = "INSERT INTO movieSessions VALUES (NULL, $movieid, '$location', '$date', '$time')";
    $stmt = $db->prepare($query);
    $stmt->execute();

    //get the new id from database
    $query = "SELECT sessionid from movieSessions
    WHERE screeningLocation = '$location'
    AND screeningDate = '$date'
    AND screeningTime = '$time'
    AND movieid = '$movieid'";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $sessionIdResult = $stmt->get_result();
}

$sessionId = $sessionIdResult->fetch_assoc()["sessionid"];
$_SESSION['sessionid'] = $sessionId;

?>