<!-- select food php -->

<?php
include "connectDB.php";

$food = array();

$sql_food = "SELECT * FROM food";
$result_food = $db->query($sql_food);

if ($result_food->num_rows > 0) {
    // output data of each row
    $foodDetails = array();

    while($row = $result_food->fetch_assoc()) {

      $foodDetails["id"] = $row["foodid"];
      $foodDetails["title"] = $row["foodName"];
      $foodDetails["price"] = $row["price"];
      $foodDetails["image"] = $row["imagePath"];
      // echo "<script>console.log(" .$foodDetails["id"]. "); </script>";
      array_push($food, $foodDetails);
    }
}






?>