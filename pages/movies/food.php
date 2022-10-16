<?php
    include ("../../php/selectForFood.php");
    session_start();
    $selectedSeatsString = $_POST['confirm-seats']; 
    $selectedSeatsArray = explode('-', $selectedSeatsString);
    $_SESSION['selectedSeats'] = $selectedSeatsArray;

    //header("Location: ./payment.php"); 
    //Session to be done
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Cineverse - Snacks & Drinks</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/food.css">
</head>

<body>
    <div id="wrapper">
        <nav class="nav-container">
            <img id="cineverse-logo" src="../../images/icons/cineverse_logo.png" alt="cineverse_logo">
            <div class="nav-items">
                <a class="active" href="../../index.html">Home</a>
                <a href="./movies.html">Movies</a>
                <a href="../cinemas/cinema.html">Cinemas</a>
                <a href="../promotions/promotion.html">Promotions</a>
                <a href="../checkbooking/checkbooking.html">Check Booking</a>
            </div>
        </nav>

        <div class="container">

            <h1>Snacks & Drinks</h1>

            <div class="food">

                <h3>Combo Sets</h3>
                <div class="food_card_list" id="combo_sets">

                    <!-- <div class="food_card">
                        <div class="item_img">
                            <img src="../../images/pages/movies/set_1.png">
                        </div>
                        <div class="item_price">
                            <h5>Combo Set A <br> S$9.90</h5>
                        </div>
                        <div class="quantity_counter">
                            <button class="counter_button_dec" onclick="decrement()" id="setA-">-</button>
                            <input type="text" class="counter_display" id="set1" value="0" min="0" disabled>
                            <button class="counter_button_inc" onclick="increment()" id="setA-">+</button>
                        </div>
                    </div> -->

                    <?php
                        for ($i=0; $i<2; $i++){
                            $food_card = $food[$i];
                            echo "<div class='food_card'>";
                            echo "<div class='item_img'>";
                            echo "<img src='../../images/pages/movies/".$food_card["image"]."'>";
                            echo "</div>";
                            echo " <div class='item_price'>";
                            echo "<h5> ".$food_card["title"]." <br> $".$food_card["price"]."</h5>";
                            echo "</div>";
                            echo "<div class='quantity_counter'>";
                            echo "<button class='counter_button_dec' onclick='decrement()' id='setA-'>-</button>";
                            echo "<input type='text' class='counter_display' id='set1' value='0' min='0' disabled>";
                            echo "<button class='counter_button_inc' onclick='increment()' id='setA-'>+</button>";
                            echo "</div>";
                            echo "</div>";
                        }
                       
                    ?> 

                </div>


                <h3>Snacks</h3>
                <div class="food_card_list" id="snacks">

                <?php
                        for ($i=2; $i<5; $i++){
                            $food_card = $food[$i];
                            echo "<div class='food_card'>";
                            echo "<div class='item_img'>";
                            echo "<img src='../../images/pages/movies/".$food_card["image"]."'>";
                            echo "</div>";
                            echo " <div class='item_price'>";
                            echo "<h5> $".$food_card["title"]." <br> $".$food_card["price"]."</h5>";
                            echo "</div>";
                            echo "<div class='quantity_counter'>";
                            echo "<button class='counter_button_dec' onclick='decrement()' id='setA-'>-</button>";
                            echo "<input type='text' class='counter_display' id='set1' value='0' min='0' disabled>";
                            echo "<button class='counter_button_inc' onclick='increment()' id='setA-'>+</button>";
                            echo "</div>";
                            echo "</div>";
                        }
                       
                    ?> 

                </div>


                <h3>Drinks</h3>
                <div class="food_card_list" id="drinks">

                <?php
                        for ($i=5; $i<8; $i++){
                            $food_card = $food[$i];
                            echo "<div class='food_card'>";
                            echo "<div class='item_img'>";
                            echo "<img src='../../images/pages/movies/".$food_card["image"]."'>";
                            echo "</div>";
                            echo " <div class='item_price'>";
                            echo "<h5> $".$food_card["title"]." <br> $".$food_card["price"]."</h5>";
                            echo "</div>";
                            echo "<div class='quantity_counter'>";
                            echo "<button class='counter_button_dec' onclick='decrement()' id='setA-'>-</button>";
                            echo "<input type='text' class='counter_display' id='set1' value='0' min='0' disabled>";
                            echo "<button class='counter_button_inc' onclick='increment()' id='setA-'>+</button>";
                            echo "</div>";
                            echo "</div>";
                        }
                       
                    ?> 
                </div>

                <br><br>
                <div class="buttons">
                    <button class="accent-button" onclick="location.href='../movies/seatSelection.html'">Back</button>
                    <button class="primary-button" onclick="location.href='../movies/payment.html' ">Next</button>
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


    </div>
    <script type="text/javascript" src="../../scripts/pages/food.js"></script>
</body>


</html>
