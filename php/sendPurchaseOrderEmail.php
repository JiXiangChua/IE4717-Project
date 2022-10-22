<?php
/* Temporary open a web socket for sending emails using fakeSMTP-2.0.jar */
require "/Applications/XAMPP/xamppfiles/htdocs/mail_patch.php";
use function mail_patch\mail;

include("../../php/selectForPayment.php");

/*Preparing Html images encoded format: */
$cineverseLogo = file_get_contents("../../images/icons/cineverse_logo.png");
$cineverseLogoData = base64_encode($cineverseLogo);
$movieImg = file_get_contents("../../images/pages/movies/$imagePath");
$movieImgData = base64_encode($movieImg);
$qrCodeImg = file_get_contents("../../images/pages/movies/QR_code.png");
$qrCodeImgData = base64_encode($qrCodeImg);

/* Implement HTML Content */

$email_content = "
<html>
<head>
<style>
.container {
    padding-top: 3%;
    background-color: #171719;
    color: #ffffff;
    padding-left: 10%;
}

.qr-container {
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    padding-bottom: 5%;
}

.qr-container img {
    width: 250px;
    height: 250px;
}

.ticket-container {
    width: 90%;
    align-self: center;
    margin-bottom: 50px;
}

.ticket-container h3 {
    text-align: center;
}

.ticket-detail-container {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
}

#movie-poster {
    width: 190px;
    height: 300px;
    margin: 5px 10% 10px 10px;
    border: 2px solid #fe8c00;
    border-radius: 30px;
}

.e-ticket-details {
    width: 65%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.e-ticker-header {
    flex: 2;
    padding: 20px 0px 0px 20px;
    width: 100%;
    word-wrap: break-word;
}

#movie-title {
    font-size: 2em;
    margin: 0px;
    color: #ffffff;
    text-align: left;
}

#cinema-location {
    font-size: 1.4em;
    margin: 0px;
    padding-top: 20px;
    color: #ffffff;
}

.e-ticket-seats {
    flex: 1;
    padding: 0px 0px 0px 20px;
    margin: 0px;
    color: #ffffff;
    width: 100%;
}

#movie-seat-number {
    color: #ffffff;
    font-size: 1.4em;
}

.e-tickets-datetime {
    flex: 2;
    padding: 0px 0px 0px 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
    width: 60%;
    color: #ffffff;
}

#movie-date,
#movie-time {
    font-size: 1.4em;
    margin: 10px 0px;
}

.purchase-container {
    padding-bottom: 10%;
}

.invoice-table {
    width: 90%;
    border-collapse: collapse;
}

tr:nth-child(2) td {
    padding-top: 30px;
}

tr:nth-last-child(2) td {
    padding-bottom: 30px;
}

.row-bottom-border {
    border-bottom: 2px solid #ffffff;
}

.row-top-border {
    border-top: 2px solid #ffffff;
}

.item-header-column,
.qty-header-column,
.cost-header-column {
    height: 80px;
    color: #ffffff;
    text-align: center;
    font-size: 1.4em;
    font-weight: bold;
}

.item-header-column {
    width: 70%;
    text-align: left;
    padding-left: 150px;
}

.qty-header-column {
    width: 15%;
}

.cost-header-column {
    width: 15%;
}

.item-column,
.qty-column,
.cost-column {
    height: 50px;
    text-align: center;
    color: #ffffff;
    font-size: 1.2em;
}

.item-column {
    width: 70%;
    text-align: left;
    padding-left: 150px;
}

.qty-column {
    width: 15%;
}

.cost-column {
    width: 15%;
}
</style>
</head>
<body>
<div class='container'>
<a href='../../index.php'>
    <img src='data:image/x-icon;base64,$cineverseLogoData' width='160'>
</a>
<h1 style='font-size: 2.5em;'>Movie Booking Summary</h1>
<p style='font-size: 1.5em;'>Thank you for choosing Cineverse as your preferred cinema.</p>
<p style='font-size: 1.1em;'>To enter the cinema:<br>
    You can use the QR code for direct entry or print and collect your tickets from the box office counters or
    kiosks and show them at the user points.<br>Note: If the QR code fails, please collect your ticket(s) from
    our box office by using your transaction number.
</p>
<div class='qr-container'>
    <h2>QR code</h2>
    <img src='data:image/x-icon;base64,$qrCodeImgData'>
</div>
<div class='ticket-container'>
    <h3 style='font-size: 1.5em;'>Transaction number: <b>$orderid</b></h3>
    <div class='ticket-detail-container'>
        <img id='movie-poster' src='data:image/x-icon;base64,$movieImgData' alt='1917'>
        <div class='e-ticket-details'>
            <div class='e-ticker-header'>
                <h3 id='movie-title'>" .
                    $_SESSION['movieTitle'] . "
                </h3>
                <p id='cinema-location'>Cinema: " .
                    $_SESSION['location'] . "
                </p>
            </div>
            <div class='e-ticket-seats'>
                <p id='movie-seat-number'>Seat(s): " .
                    implode(", ", $_SESSION['selectedSeats']) . "
                </p>
            </div>
            <div class='e-tickets-datetime'>
                <p id='movie-date'>Date: " .
                    $_SESSION['date'] . "
                </p>
                <p id='movie-time'>Time: " .
                    $_SESSION['time'] . "
                </p>
            </div>
        </div>
    </div>
</div>
<div class='purchase-container'>
    <h2>Your Order Details:</h2>";

$email_content .= gneeratePurchaseTableForEmail();

$email_content .= "</div>
</div>
</body>
</html>
";


/* Preparing Email to send: */

$to = $email == "" ? "f32ee@localhost" : $email;
$subject = "Successful booking confirmation with Cineverse: Transaction Number " . $orderid;
$message = $email_content;

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: admin@cineverse.com' . "\r\n" . 'Reply-To: admin@cineverse.com' . "\r\n" . 'X-Mailer: PHP/' .
phpversion();

mail($to, $subject, $message, $headers, '-fadmin@cineverse.com');

echo ("<script>console.log('mail sent to : $to ')</script>");

?>