<?php
include "../../php/connectDB.php";

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
      echo "<script>console.log(" .$orderDetails["movie"]. "); </script>";
      array_push($order, $orderDetails);
    }
}

//print_r ($order);
//echo "<script>console.log(" .$order[0]["movie"]. "); </script>";

$sql_order2 = "SELECT * FROM movies where movieid = ".$order[0]["movie"]." ";
$result_order2 = $db->query($sql_order2);
$movie_booked = array();

if ($result_order2->num_rows > 0) {
    $movieDetails = array();

    while($row = $result_order2->fetch_assoc()) {
    
        $movieDetails["id"] = $row["movieid"];
        $movieDetails["title"]=$row["title"];
        $movieDetails["image"]= $row["imagePathForPayment"];
      echo "<script>console.log(" .$movieDetails["id"]. "); </script>";
      array_push($movie_booked, $movieDetails);
    }
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Cineverse - Booking Details</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/bookingDetails.css">
</head>

<body>

    <div id="wrapper">
        <nav class="nav-container">
            <img id="cineverse-logo" src="../../images/icons/cineverse_logo.png" alt="cineverse_logo">
            <div class="nav-items">
                <a class="active" href="../../index.php">Home</a>
                <a href="../movies/movies.php">Movies</a>
                <a href="../cinemas/cinema.html">Cinemas</a>
                <a href="../promotions/promotion.html">Promotions</a>
                <a href="../checkbooking/checkbooking.html">Check Booking</a>
            </div>
        </nav>

        <div class="container">
            <h1>Your Booking</h1>
            <br><br>
            <div class="box">
                <div class="movie_img">
                    <?php
                    echo " <img src='../../images/pages/movies/".$movie_booked[0]["image"]."'>";
                    ?>
                    <!-- <img src="../../images/pages/movies/movie-1917.jpg"> -->
                </div>

                <div class="right_part">
                    <div class="right_top">
                        <div class="movie_info">
                            <h2>
                                <span>
                                    <?php
                                        echo $movie_booked[0]["title"];
                                    ?>
                                </span>
                            </h2>
                            <p>Trasaction Number:
                                <span>
                                    <?php echo $order[0]["id"]; ?>
                                </span>
                            </p>
                        </div>
                        <div class="QR_code">
                            <img src="../../images/pages/movies/QR_code.png">
                        </div>
                    </div>

                    <div class="right_table">
                        <h5>Your Purchase</h5>
                        <hr>
                        <table border="0" class="purchase_table">
                            <tr>
                                <th class="first_column">Item</th>
                                <th class="second_column">Qty</th>
                                <th class="third_column">Cost</th>
                            </tr>
                            <tr>
                                <td>Standard Week Day Ticket</td>
                                <td>2</td>
                                <td>10.00</td>
                            </tr>
                            <tr>
                                <td>(Seats: D1, D2)</td>
                            </tr>
                            <tr>
                                <td>Popcorn</td>
                                <td>1</td>
                                <td>8.90</td>
                            </tr>
                            <tr>
                                <td>Soft Drinks</td>
                                <td>1</td>
                                <td>3.50</td>
                            </tr>
                        </table>
                        <hr>

                        <div class="total_price">
                            <h5>Total: </h5>
                            <h5 class="price_value">32.4</h5>
                        </div>
                    </div>

                    <div class="buttons-container">
                        <button onclick="location.href='../checkbooking/seatSelection.html'"
                            class="accent-button">Edit</button>
                        <button onclick="location.href='../../index.html'" class="primary-button">Done</button>

                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-container">
            <img id="cineverse-logo" src="../../images/icons/cineverse_logo.png" alt="cineverse_logo">
            <div class="link-container">
                <a href="">About</a>
                <a href="">FAQs</a>
                <a href="">Contact Us</a>
                <a href="">Terms of Service</a>
            </div>
            <div class="social-media-icons">
                <img id="social-media-icon" src="../../images/icons/facebook-icon.png" alt="facebook-icon">
                <img id="social-media-icon" src="../../images/icons/instagram-icon.png" alt="instagram-icon">
            </div>
            <p>&copy; COPYRIGHT 2022 IE4717 F38-DG05 | CHUA JI XIANG | TANG ZHAO SHENG </p>
        </footer>

    </div>

</body>

</html>