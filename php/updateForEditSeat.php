<?php
include "connectDB.php";

$seatSelected = $_POST["confirm-seats"];
$orderid = $_POST['orderid'];
$sessionid = $_POST['sessionid'];


$query = "DELETE FROM occupiedSeats WHERE orderid = ".$orderid." AND sessionid = ".$sessionid."; ";


$selectedSeatsArray = explode('-', $seatSelected);

 for($i=0; $i<count($selectedSeatsArray);$i++){
    echo "<script>console.log('".$selectedSeatsArray[$i]."');</script>";
    
    $query .= "INSERT INTO occupiedSeats VALUES ('$sessionid', '".$selectedSeatsArray[$i]."', '$orderid');";

}

if (mysqli_multi_query($db, $query)) {
    echo "<script>console.log('New purchase order created successfully')</script>";
} else {
    echo "<script>console.log(Error: $query \n ". mysqli_error($db) .")</script>";
}

//SELECT * FROM `occupiedSeats` WHERE orderid = 987654331;

?>