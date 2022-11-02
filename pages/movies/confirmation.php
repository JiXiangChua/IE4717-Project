<?php
    session_start();

    $name = $_POST['cardHolder']; //must use square brackets!!
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvcNumber = $_POST['cvc'];
    $email = $_POST['email'];

    include("../../php/createPurchaseOrder.php");
    include("../../php/sendPurchaseOrderEmail.php");

    //Destroy session at the end of php:
    session_destroy();
    $sessionId = session_id() == "" ? "NULL" : session_id();
    echo "<script>console.log('Session id after destroyed: ".$sessionId."')</script>";
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Cineverse - Booking Confirmation</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/movie-confirmation.css">
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
            <div class="confirmation-container">
                <h1>Booking Success</h1>
                <div id="transaction-id">
                    <p>Transaction No: <?php echo $orderid ?></p>
                    <br />
                    <p>E-tickets have been sent to your e-mail: <?php echo $email ?></p>
                </div>
                <a href="../../index.php">
                    <button type="button" class="accent-button done-button">Done</button>
                </a>
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