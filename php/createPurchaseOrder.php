<?php

    include ('connectDB.php');

    // get values that need to be send to DB
    $seatsPurchased = $_SESSION['selectedSeats'];
    $sessionid = $_SESSION['sessionid'];

    //SQL Statements:
    $query = "";
    foreach ($seatsPurchased as $seat) {
        $query.= "INSERT INTO occupiedSeats
        VALUES ('$sessionid','$seat');";
    }

    if (mysqli_multi_query($db, $query)) {
        echo "<script>console.log('New purchase order created successfully')</script>";
    } else {
        echo "<script>console.log(Error: $query \n ". mysqli_error($db) .")</script>";
    }

    $db->close();

?>