<?php
    session_start();
    $selectedSeatsString = $_POST['confirm-seats']; 
    $selectedSeatsArray = explode('-', $selectedSeatsString);
    $_SESSION['selectedSeats'] = $selectedSeatsArray;

    header("Location: ./payment.php"); //To remove by zhaosheng as I now immediately redirect to my payment page.
?>