<?php

include('connectDB.php');



session_start();
// var_dump($_SESSION);

include("../../php/selectFoodForPayment.php");

$query = "SELECT * from movies where movieid='" . $_SESSION['movieid'] . "';";
$stmt = $db->prepare($query);
$stmt->execute();

$results = $stmt->get_result(); //only fetched one result that matches the id

$row = $results->fetch_assoc();

$imagePath = $row['imagePathForPayment'];

$db->close();

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
    $ticketsPurchase["cost"] = number_format(10, 2);

    //Push all the user purchases into the purchases array
    array_push($purchases, $ticketsPurchase);

    $display_food = $_SESSION["selectedFood"];

    $foodPurchase = array();
    for($i=0;$i<count($display_food);$i++){
        $foodPurchase["item"] = $display_food[$i]["title"];
        $foodPurchase["qty"] = $display_food[$i]["quantity"];
        $foodPurchase["cost"] = $display_food[$i]["price"];
        array_push($purchases, $foodPurchase);
    }


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
    echo "<td class='cost-column'>S$ ".number_format($totalCost, 2)."</td>";
    echo "</tr>";
    echo "</table>";
}

function gneeratePurchaseTableForEmail() {
    $purchases = array();
    $outputHtml = "";

    // Generate individual purchase items
    $ticketsPurchase = array();
    $ticketsPurchase["item"] = "Standard Movie Ticket";
    $ticketsPurchase["qty"] = count($_SESSION['selectedSeats']);
    $ticketsPurchase["cost"] = 10;

    //Push all the user purchases into the purchases array
    array_push($purchases, $ticketsPurchase);

    $outputHtml .= "<table class='invoice-table'>";
    $outputHtml .= "<tr class='row-bottom-border'>";
    $outputHtml .= "<td class='item-header-column'>Item</td>";
    $outputHtml .= "<td class='qty-header-column'>Qty</td>";
    $outputHtml .= "<td class='cost-header-column'>Unit Cost</td>";
    $outputHtml .= "</tr>";

    foreach ($purchases as $purchase)
    {
        $outputHtml .= "<tr>";
        $outputHtml .= "<td class='item-column'>" . $purchase["item"] . "</td>";
        $outputHtml .= "<td class='qty-column'>" . $purchase["qty"] . "</td>";
        $outputHtml .= "<td class='cost-column'>" . $purchase["cost"] . "</td>";
        $outputHtml .= "</tr>";
    }

    $totalCost = array_reduce($purchases, function ($sum, $current) {
        return $sum += ($current["qty"] * $current["cost"]);
    }, 0);

    $outputHtml .= "<tr class='row-top-border'>";
    $outputHtml .= "<td class='item-column'></td>";
    $outputHtml .= "<td class='qty-column'>Total</td>";
    $outputHtml .= "<td class='cost-column'>S$ $totalCost</td>";
    $outputHtml .= "</tr>";
    $outputHtml .= "</table>";

    return $outputHtml;
}

?>