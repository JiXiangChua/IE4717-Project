<!-- fetch from food page -->


<?php
include "connectDB.php";

if(!isset($_SESSION['selectedFood'])){
    $_SESSION['selectedFood'] = array();
}

$food_order = array();
for($i=0; $i<8; $i++){
    $foodid = $i+1; 
    $food_details = array();
    $food_[$foodid] = $_POST[$foodid];
    $food_details["foodid"] = $foodid;
    $food_details["quantity"] = $food_[$foodid];
    array_push($food_order, $food_details);
    //echo "<script>console.log(".$food_order[$i]["foodid"].");</script>";

}


$food_order_filtered = array_filter($food_order, function($var){
    return $var["quantity"] !== "0";
});


//print_r($food_order_filtered);

$display_food = array();

for($i=0;$i<8;$i++){

    $sql_food = 'SELECT * FROM food where foodid = "'.$food_order_filtered[$i]["foodid"].'" ';
    $result = $db->query($sql_food);

    if ($result->num_rows > 0) {
        // output data of each row
        $display = array();
        while($row = $result->fetch_assoc()) {
            
            $display["foodid"] = $row["foodid"];
            $display["title"] =  $row["foodName"];
            $display["price"] =  $row["price"];
            $display["image"] =  $row["imagePath"];
            $display["quantity"] = $food_order_filtered[$i]["quantity"];
            array_push($display_food, $display);
        }
    }

}

$_SESSION["selectedFood"] = $display_food;

// print_r($_SESSION["selectedFood"]);
?>