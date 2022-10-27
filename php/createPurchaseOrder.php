<?php

    include ('connectDB.php');

    //POST variables retrieve from form stored in : $name, $cardNumber, $expiryDate, $cvcNumber, $email

    // get values that need to be send to DB
    $seatsPurchased = $_SESSION['selectedSeats'];
    $sessionid = $_SESSION['sessionid'];
    $movieid = $_SESSION['movieid'];
    $hashCardNumber = md5($cardNumber);
    $hashCvc = md5($cvcNumber);
    $food = $_SESSION["selectedFood"];


    //1. create a new order id and retrieve the id:
    $query = "INSERT INTO orders values (NULL, $movieid, $sessionid);";
    $stmt = $db->prepare($query);
    $stmt->execute();

    if ($stmt){
        echo "<script>console.log('Created new order id: $stmt->insert_id')</script>";
    } else {
        echo "<script>console.log('Error courred while creating new order id')</script>";
    }

    $orderid = $stmt->insert_id; //If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, we can get the ID of the last inserted/updated record immediately.

    //2. Create the customer that purchase the order
    $query = "INSERT INTO customers values ($orderid, '$name', '$name', '$hashCardNumber', '$expiryDate', '$hashCvc', '$email');"; // Note that: those fields that are char/varchar needs to be enclosed with ''

    //3. Update the occupied seats for that movie session purchased by the customer:
    foreach ($seatsPurchased as $seat) {
        $query.= "INSERT INTO occupiedSeats
        VALUES ('$sessionid','$seat', '$orderid');";
    }

    for($i=0;$i<count($food);$i++){
        $query.= "INSERT INTO purchasedFood VALUES (".$food[$i]["foodid"].", '$orderid', ".$food[$i]["quantity"].");";
    }

    

    if (mysqli_multi_query($db, $query)) {
        echo "<script>console.log('New purchase order created successfully')</script>";
    } else {
        echo "<script>console.log(Error: $query \n ". mysqli_error($db) .")</script>";
    }

    $db->close();

?>