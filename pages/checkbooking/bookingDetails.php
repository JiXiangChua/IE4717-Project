<?php
include "../../php/selectForBookingDetails.php";


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
                            <p>Transaction Number:
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
                                <td>Standard Movie Ticket</td>
                                <td>
                                <?php
                                    echo count($session);
                                    ?>
                                </td>
                                <td>
                                <?php
                                    $ticket_price = count($session) * 10;
                                    echo number_format($ticket_price,2);
                                    
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>(Seats: <span>
                                <?php
                                    //echo count($);
                                    for ($i=0; $i<count($session); $i++){
                                        echo $session[$i]["seat"];
                                        if ($i < count($session)-1){
                                            echo "&nbsp;";
                                            echo ",";
                                        }
                                    }
                                    
                                    ?>
                                </span>)</td>
                            </tr>

                            <?php
                            $food_info = array();
                            $cost = 0;
                            $food_total_cost = 0;
                            for($i=0; $i< count($food); $i++){
                                
                                $sql_order5 = "SELECT * FROM food where foodid= ".$food[$i]["foodid"]." ";
                                $result_order5 = $db->query($sql_order5);
                                if ($result_order5->num_rows > 0) {
                                    $food_title_price = array();
                                    while($row = $result_order5->fetch_assoc()) {
                                        $food_title_price["food"]=$row["foodName"];
                                        $food_title_price["price"] = $row["price"];
                                        array_push($food_info, $food_title_price);
                                    }
                                }
                                $cost = $food[$i]["quantity"] * $food_info[$i]["price"];
                                echo "<script>console.log(".$food[0].")</script>";                   
                                echo "<tr>";
                                echo "<td> ".$food_info[$i]["food"]."</td>";
                                echo "<td> ".$food[$i]["quantity"]." </td>";
                                echo "<td> ".number_format($cost,2)." </td>";
                                $food_total_cost += $cost;
                            }

                            ?>
                            
                        </table>
                        <hr>

                        <div class="total_price">
                            <h5>Total: </h5>
                            <h5 class="price_value" id="total_price">
                                <?php
                                $total_price = $food_total_cost + $ticket_price;
                                echo "S$".number_format($total_price,2);
                                ?>
                            </h5>
                        </div>
                    </div>


                    <form action="editSeatSelection.php" method="POST">
                            <input type="hidden" name= "orderid" value = <?php
                                echo $order[0]["id"];
                            ?>
                             hidden>

                             <input type="number" name= "movieid" value = <?php
                                echo $movie_booked[0]["id"];
                            ?>
                             hidden>

                             <input type="number" name= "sessionid" hidden value = <?php
                                echo $session[0]["sessionid"];
                            ?>
                             >
                    <div class="buttons-container">
                        <input type="submit" value="Edit" onclick="location.href='../checkbooking/editSeatSelection.php'"
                            class="accent-button"></input>
                        <input type="button" onclick="location.href='../../index.php'" class="primary-button" value="Done"></input>

                    </div>
                    </form>
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