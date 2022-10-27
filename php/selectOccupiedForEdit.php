<?php
include "connectDB.php";

$movieid = $_POST['movieid'];
$orderid = $_POST['orderid'];


$query_1 = "SELECT * FROM movies WHERE movieid = ".$movieid." ";
$result_1 = $db->query($query_1);


if ($result_1->num_rows > 0) {
    while($row = $result_1->fetch_assoc()) {
        $movieTitle = $row['title'];
    }
}

$session = array();
$sql_order3 = "SELECT * FROM occupiedSeats where orderid= ".$orderid." ";
$result_order3 = $db->query($sql_order3);
if ($result_order3->num_rows > 0) {
    $sessionDetails = array();

    while($row = $result_order3->fetch_assoc()) {
        $previouslySelectedSeats[] = $row["seatNumber"];
        $sessionDetails["seat"]=$row["seatNumber"];
        $sessionDetails["sessionid"] = $row["sessionid"];
      array_push($session, $sessionDetails);
    }
}



$query_2 = "SELECT * FROM movieSessions WHERE sessionid = ".$session[0]["sessionid"]." AND movieid =  ".$movieid."  ";
$result_2 = $db->query($query_2);

if ($result_2->num_rows > 0) {
    while($row = $result_2->fetch_assoc()) {
        $location = $row['screeningLocation'];
        $date = $row['screeningDate'];
        $time = $row['screeningTime'];
    }
}
$date = str_replace(" ", "", $date); //convert to db formatting


$query = "SELECT seatNumber from occupiedSeats 
    INNER JOIN movieSessions ON occupiedSeats.sessionid = movieSessions.sessionid 
    WHERE screeningLocation = '$location'
    AND screeningDate = '$date'
    AND screeningTime = '$time'
    AND movieid = '$movieid'";

for($i=0; $i<count($session); $i++){
    $query .= "AND seatNumber !=  '".$previouslySelectedSeats[$i]."' ";
    echo "<script>console.log('".$previouslySelectedSeats[$i]."');</script>";
}


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

//Set current movie session id to $_SESSION. If the id doesnt exist, create a new session id to the database and set it as current sessionid in $_SESSION.

// $query = "SELECT sessionid from movieSessions
//     WHERE screeningLocation = '$location'
//     AND screeningDate = '$date'
//     AND screeningTime = '$time'
//     AND movieid = '$movieid'";

// $stmt = $db->prepare($query);
// $stmt->execute();
// $sessionIdResult = $stmt->get_result();

// if ($sessionIdResult->num_rows < 1)
// {
//     //create new session id in database
//     $query = "INSERT INTO movieSessions VALUES (NULL, $movieid, '$location', '$date', '$time')";
//     $stmt = $db->prepare($query);
//     $stmt->execute();

//     //get the new id from database
//     $query = "SELECT sessionid from movieSessions
//     WHERE screeningLocation = '$location'
//     AND screeningDate = '$date'
//     AND screeningTime = '$time'
//     AND movieid = '$movieid'";

//     $stmt = $db->prepare($query);
//     $stmt->execute();
//     $sessionIdResult = $stmt->get_result();
// }



?>



