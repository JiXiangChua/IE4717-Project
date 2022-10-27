<?php
include "connectDB.php";

$transcation_number = $_POST["transaction_number"];
//echo '<script>console.log('.$transcation_number.'); </script>';

$sql_order = "SELECT * FROM orders where orderid = ".$transcation_number." ";
$result_order = $db->query($sql_order);
$order = array();

if ($result_order->num_rows > 0) {
    $orderDetails = array();

    while($row = $result_order->fetch_assoc()) {
    
        $orderDetails["id"] = $row["orderid"];
        $orderDetails["movie"]=$row["movieid"];
        $orderDetails["session"] = $row["sessionid"];
      echo "<script>console.log(" .$orderDetails["id"]. "); </script>";
      array_push($order, $orderDetails);
    }
}

if ($result_order->num_rows == 0){
    header("Location: bookingNotExisted.php");
    //echo "Your transcation number is not existed";
}


$sql_order2 = "SELECT * FROM movies where movieid = ".$order[0]["movie"]." ";
$result_order2 = $db->query($sql_order2);
$movie_booked = array();

if ($result_order2->num_rows > 0) {
    $movieDetails = array();

    while($row = $result_order2->fetch_assoc()) {
    
        $movieDetails["id"] = $row["movieid"];
        $movieDetails["title"]=$row["title"];
        $movieDetails["image"]= $row["imagePathForPayment"];
      array_push($movie_booked, $movieDetails);
    }
}

$session = array();

$sql_order3 = "SELECT * FROM occupiedSeats where orderid= ".$order[0]["id"]." ";
$result_order3 = $db->query($sql_order3);
if ($result_order3->num_rows > 0) {
    $sessionDetails = array();

    while($row = $result_order3->fetch_assoc()) {
        $sessionDetails["seat"]=$row["seatNumber"];
        $sessionDetails["sessionid"] = $row["sessionid"];
      array_push($session, $sessionDetails);
    }
}

$food = array();

$sql_order4 = "SELECT * FROM purchasedFood where orderid= ".$order[0]["id"]." ";
$result_order4 = $db->query($sql_order4);
if ($result_order4->num_rows > 0) {
    $foodDetails = array();

    while($row = $result_order4->fetch_assoc()) {
        $foodDetails["foodid"]=$row["foodid"];
        $foodDetails["quantity"] = $row["quantity"];
      array_push($food, $foodDetails);
    }
}






?>