<?php
    include ("../../php/selectForFood.php");
    session_start();
    $selectedSeatsString = $_POST['confirm-seats']; 
    $selectedSeatsArray = explode('-', $selectedSeatsString);
    $_SESSION['selectedSeats'] = $selectedSeatsArray;


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
                <a class="active" href="../../index.php">Home</a>
                <a href="./movies.php">Movies</a>
                <a href="../cinemas/cinema.html">Cinemas</a>
                <a href="../promotions/promotion.html">Promotions</a>
                <a href="../checkbooking/checkbooking.html">Check Booking</a>
            </div>
        </nav>

        <div class="container">

            <h1>Snacks & Drinks</h1>

            <div class="food">
            
            <form action="./payment.php" method="POST">
                <h3>Combo Sets</h3>
                <div class="food_card_list" id="combo_sets">


                    <?php
                        for ($i=0; $i<2; $i++){
                            $food_card = $food[$i];
                            $id_number = $i +1;
                            echo "<div class='food_card'>";
                            echo "<div class='item_img'>";
                            echo "<img src='../../images/pages/movies/".$food_card["image"]."'>";
                            echo "</div>";
                            echo " <div class='item_price'>";
                            echo "<h5> ".$food_card["title"]." <br> $".$food_card["price"]."</h5>";
                            echo "</div>";
                            echo "<div class='quantity_counter'>";
                            echo "<input type='button' class='counter_button_dec'  id='setA-' value='-'></input>";
                            echo "<input type='text' class='counter_display' id='".$id_number."' name='".$id_number."' value='0' min='0' readonly>";
                            echo "<input type='button' class='counter_button_inc'  id='setA-' value='+'></input>";
                            echo "</div>";
                            echo "</div>";

                            //echo "<script>console.log(".$id_number.");</script>";
                            //check if the id of food card correctly display
                        }
                       
                    ?> 

                </div>


                <h3>Snacks</h3>
                <div class="food_card_list" id="snacks">

                <?php
                        for ($i=2; $i<5; $i++){
                            $food_card = $food[$i];
                            $id_number = $i +1;
                            echo "<div class='food_card'>";
                            echo "<div class='item_img'>";
                            echo "<img src='../../images/pages/movies/".$food_card["image"]."'>";
                            echo "</div>";
                            echo " <div class='item_price'>";
                            echo "<h5> $".$food_card["title"]." <br> $".$food_card["price"]."</h5>";
                            echo "</div>";
                            echo "<div class='quantity_counter'>";
                            echo "<input type='button' class='counter_button_dec'  id='setA-' value='-'></input>";
                            echo "<input type='text' class='counter_display' id='".$id_number."' name='".$id_number."' value='0' min='0' readonly>";
                            echo "<input type='button' class='counter_button_inc'  id='setA-' value='+'></input>";
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
                            $id_number = $i +1;
                            echo "<div class='food_card'>";
                            echo "<div class='item_img'>";
                            echo "<img src='../../images/pages/movies/".$food_card["image"]."'>";
                            echo "</div>";
                            echo " <div class='item_price'>";
                            echo "<h5> $".$food_card["title"]." <br> $".$food_card["price"]."</h5>";
                            echo "</div>";
                            echo "<div class='quantity_counter'>";
                            echo "<input type='button' class='counter_button_dec'  id='setA-' value='-' ></input>";
                            echo "<input type='text' class='counter_display' id='".$id_number."' name='".$id_number."' value='0' min='0' readonly>";
                            echo "<input type='button' class='counter_button_inc'  id='setA-' value='+'></input>";
                            echo "</div>";
                            echo "</div>";
                        }
                       
                    ?> 
                </div>

                <br><br>

                
                    <input type="hidden" name="foodSelected" id="foodSelected" >;
                   
                <div class="buttons">
                    <input type="button" class="accent-button" onclick="location.href='../movies/seatSelection.php'" value="Back">
                    <div class="submit_button">
                        <input type="submit" class="primary-button" value="Next" >
                    </div>
                </div>
                </form>
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
