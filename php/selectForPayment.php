<?php

include('connectDB.php');

session_start();
// var_dump($_SESSION);

$query = "SELECT * from movies where movieid='" . $_SESSION['movieid'] . "';";
$stmt = $db->prepare($query);
$stmt->execute();

$results = $stmt->get_result(); //only fetched one result that matches the id

$row = $results->fetch_assoc();

$imagePath = $row['imagePathForPayment'];

function getSelectedSeats()
{
    $selectedSeats = implode(", ", $_SESSION['selectedSeats']);
    echo $selectedSeats;
}

function generatePurchaseTable()
{
    $purchases = array();

    // Generate individual purchase items
    $ticketsPurchase = array();
    $ticketsPurchase["item"] = "Standard Movie Ticket";
    $ticketsPurchase["qty"] = count($_SESSION['selectedSeats']);
    $ticketsPurchase["cost"] = 10;

    //Push all the user purchases into the purchases array
    array_push($purchases, $ticketsPurchase);

    echo "<table class='invoice-table'>";
    echo "<tr class='row-bottom-border'>";
    echo "<td class='item-header-column'>Item</td>";
    echo "<td class='qty-header-column'>Qty</td>";
    echo "<td class='cost-header-column'>Unit Cost</td>";
    echo "</tr>";

    foreach ($purchases as $purchase)
    {
        echo "<tr>";
        echo "<td class='item-column'>" . $purchase["item"] . "</td>";
        echo "<td class='qty-column'>" . $purchase["qty"] . "</td>";
        echo "<td class='cost-column'>" . $purchase["cost"] . "</td>";
        echo "</tr>";
    }

    $totalCost = array_reduce($purchases, function ($sum, $current) {
        return $sum += ($current["qty"] * $current["cost"]);
    }, 0);

    echo "<tr class='row-top-border'>";
    echo "<td class='item-column'></td>";
    echo "<td class='qty-column'>Total</td>";
    echo "<td class='cost-column'>S$ $totalCost</td>";
    echo "</tr>";
    echo "</table>";
}

?>