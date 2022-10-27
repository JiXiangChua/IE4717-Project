<?php
include('../../php/selectForPayment.php');


?>
<html>

<head>
    <meta charset="utf-8">
    <title>Cineverse - Payment</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/movie-payment.css">
    <script src="../../scripts/globals/navBarActiveLink.js" defer></script>
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
            <h1>Summary</h1>
            <div class="ticket-container">
                <h2>Ticket</h2>
                <div class="ticket-detail-container">
                    <?php 
                        echo "<img id='movie-poster' src='../../images/pages/movies/".$imagePath."' alt='1917'>";
                    ?>
                    <div id="e-ticket">
                        <!-- e-ticket image -->
                        <img src="../../images/pages/movies/e-ticket-template.png">
                        <!-- overlay containing the details -->
                        <div class="e-ticket-details">
                            <div class="e-ticker-header">
                                <h3 id="movie-title">
                                    <?php echo $_SESSION['movieTitle']?>
                                </h3>
                                <p id="cinema-location">Cinema:
                                    <?php echo $_SESSION['location']?>
                                </p>
                            </div>
                            <div class="e-ticket-seats">
                                <p id="movie-seat-number">Seat:
                                    <?php getSelectedSeats()?>
                                </p>
                            </div>
                            <div class="e-tickets-datetime">
                                <p id="movie-date">Date:
                                    <?php echo $_SESSION['date']?>
                                </p>
                                <p id="movie-time">Time:
                                    <?php echo $_SESSION['time']?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="snack-container">
                <h2>Snacks & Drinks</h2>
                <div class="horizontal-scroll-container">
                    <div id="snack-list">
                        <?php

                        for($i=0;$i<count($display_food);$i++){
                            
                            echo '<div class="snack-card">';
                            echo " <img src='../../images/pages/movies/".$display_food[$i]["image"]."' >" ;
                            echo '<p>'.$display_food[$i]["title"].'</p>';
                            echo '<div class="snack-quantity-card">'.$display_food[$i]["quantity"].'</div>';
                            echo '</div>';
                        }

                        ?>

                        <!-- <div class="snack-card">
                            <img src="../../images/pages/movies/beef_burger.png" alt="">
                            <p>Combo Set A</p>
                            <div class="snack-quantity-card">1</div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="invoice-container">
                <h2>Your Purchases</h2>
                <div id="table-container"></div>
                <?php 
                    generatePurchaseTable();


                    //print_r($purchases);
                ?>
            </div>
            <div class="payment-container">
                <h1>Payment</h1>
                <form id="payment-form" action="confirmation.php" method="post">
                    <div class="card-holder-container">
                        <label for="card-holder">Card Holder</label>
                        <input id="card-holder" name="cardHolder" class="" type="text" placeholder="Name" required>
                    </div>
                    <div class="card-number-container">
                        <label for="card-number">Card Number</label>
                        <input id="card-number" name="cardNumber" class="" type="number"
                            placeholder="Enter without '-' and space in between the numbers" required>
                    </div>
                    <div class="expiry-date-container">
                        <label for="expiry-date">Expiry Date</label>
                        <input id="expiry-date" name="expiryDate" class="" type="date" required>
                    </div>
                    <div class="cvc-container">
                        <label for="cvc">CVC Number</label>
                        <input id="cvc" name="cvc" class="" type="number" placeholder="CVC" required>
                    </div>
                    <div class="email-container">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="" type="email" placeholder="abc@abc.zx" required>
                    </div>
                </form>
                <div class="buttons-container">
                    <!-- To remove this link later -->
                    <a href="../../pages/movies/confirmation.php">
                        <button class="accent-button">Back</button>
                    </a>
                    <input form="payment-form" type="submit" value="Pay" class="primary-button">
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
    <script src="../../scripts/pages/paymentValidation.js"></script>
</body>

</html>