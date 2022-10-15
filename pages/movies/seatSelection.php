<?php

    session_start();
    $movieTitle = $_SESSION['movieTitle'];

    if(isset($_GET['location']) || isset($_GET['date']) || isset($_GET['time'])) {
        $_SESSION['location'] = $_GET['location'];
        $_SESSION['date'] = str_replace("-", " / ", $_GET['date']);
        $_SESSION['time'] = $_GET['time'];
        header('location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    
    include ('../../php/selectOccupiedSeatsForMovie.php');

    $previouslySelectedSeats = array();

    if (isset($_SESSION["selectedSeats"])) {
        // if seat is previously selected, then restore them:
        $previouslySelectedSeats = $_SESSION['selectedSeats'];
    }

?>
<html>

<head>
    <meta charset="utf-8">
    <title>Cineverse - Seat Selection</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/movie-seat.css">
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
            <div class="movie-container">
                <div class="movie-detail-container">
                    <p id="movie-title">
                        <?php echo $movieTitle ?>
                    </p>
                    <div class="movie-detail-row">
                        <p id="movie-date">
                            <?php echo str_replace("-", " / ", $_SESSION['date']) ?>
                        </p>
                        <p id="movie-time">
                            <?php echo $_SESSION['time'] ?>
                        </p>
                    </div>
                </div>
                <div class="seat-plan-container">
                    <div class="screen"></div>
                    <p class="screen-label">Screen</p>
                    <div class="row firstrow">
                        <div class="row-labels">A</div>
                        <div class="seat" data-value="A1"></div>
                        <div class="seat" data-value="A2"></div>
                        <div class="seat" data-value="A3"></div>
                        <div class="seat" data-value="A4"></div>
                        <div class="seat" data-value="A5"></div>
                        <div class="seat" data-value="A6"></div>
                        <div class="seat" data-value="A7"></div>
                        <div class="seat" data-value="A8"></div>
                        <div class="seat" data-value="A9"></div>
                        <div class="seat" data-value="A10"></div>
                        <div class="seat" data-value="A11"></div>
                        <div class="seat" data-value="A12"></div>
                        <div class="seat" data-value="A13"></div>
                        <div class="seat" data-value="A14"></div>
                        <div class="seat" data-value="A15"></div>
                        <div class="seat" data-value="A16"></div>
                        <div class="seat" data-value="A17"></div>
                        <div class="seat" data-value="A18"></div>
                        <div class="seat" data-value="A19"></div>
                        <div class="seat" data-value="A20"></div>
                    </div>

                    <div class="row">
                        <div class="row-labels">B</div>
                        <div class="seat" data-value="B1"></div>
                        <div class="seat" data-value="B2"></div>
                        <div class="seat" data-value="B3"></div>
                        <div class="seat" data-value="B4"></div>
                        <div class="seat" data-value="B5"></div>
                        <div class="seat" data-value="B6"></div>
                        <div class="seat" data-value="B7"></div>
                        <div class="seat" data-value="B8"></div>
                        <div class="seat" data-value="B9"></div>
                        <div class="seat" data-value="B10"></div>
                        <div class="seat" data-value="B11"></div>
                        <div class="seat" data-value="B12"></div>
                        <div class="seat" data-value="B13"></div>
                        <div class="seat" data-value="B14"></div>
                        <div class="seat" data-value="B15"></div>
                        <div class="seat" data-value="B16"></div>
                        <div class="seat" data-value="B17"></div>
                        <div class="seat" data-value="B18"></div>
                        <div class="seat" data-value="B19"></div>
                        <div class="seat" data-value="B20"></div>
                    </div>

                    <div class="row">
                        <div class="row-labels">C</div>
                        <div class="seat" data-value="C1"></div>
                        <div class="seat" data-value="C2"></div>
                        <div class="seat" data-value="C3"></div>
                        <div class="seat" data-value="C4"></div>
                        <div class="seat" data-value="C5"></div>
                        <div class="seat" data-value="C6"></div>
                        <div class="seat" data-value="C7"></div>
                        <div class="seat" data-value="C8"></div>
                        <div class="seat" data-value="C9"></div>
                        <div class="seat" data-value="C10"></div>
                        <div class="seat" data-value="C11"></div>
                        <div class="seat" data-value="C12"></div>
                        <div class="seat" data-value="C13"></div>
                        <div class="seat" data-value="C14"></div>
                        <div class="seat" data-value="C15"></div>
                        <div class="seat" data-value="C16"></div>
                        <div class="seat" data-value="C17"></div>
                        <div class="seat" data-value="C18"></div>
                        <div class="seat" data-value="C19"></div>
                        <div class="seat" data-value="C20"></div>
                    </div>

                    <div class="row">
                        <div class="row-labels">D</div>
                        <div class="seat" data-value="D1"></div>
                        <div class="seat" data-value="D2"></div>
                        <div class="seat" data-value="D3"></div>
                        <div class="seat" data-value="D4"></div>
                        <div class="seat" data-value="D5"></div>
                        <div class="seat" data-value="D6"></div>
                        <div class="seat" data-value="D7"></div>
                        <div class="seat" data-value="D8"></div>
                        <div class="seat" data-value="D9"></div>
                        <div class="seat" data-value="D10"></div>
                        <div class="seat" data-value="D11"></div>
                        <div class="seat" data-value="D12"></div>
                        <div class="seat" data-value="D13"></div>
                        <div class="seat" data-value="D14"></div>
                        <div class="seat" data-value="D15"></div>
                        <div class="seat" data-value="D16"></div>
                        <div class="seat" data-value="D17"></div>
                        <div class="seat" data-value="D18"></div>
                        <div class="seat" data-value="D19"></div>
                        <div class="seat" data-value="D20"></div>
                    </div>

                    <div class="row">
                        <div class="row-labels">E</div>
                        <div class="seat" data-value="E1"></div>
                        <div class="seat" data-value="E2"></div>
                        <div class="seat" data-value="E3"></div>
                        <div class="seat" data-value="E4"></div>
                        <div class="seat" data-value="E5"></div>
                        <div class="seat" data-value="E6"></div>
                        <div class="seat" data-value="E7"></div>
                        <div class="seat" data-value="E8"></div>
                        <div class="seat" data-value="E9"></div>
                        <div class="seat" data-value="E10"></div>
                        <div class="seat" data-value="E11"></div>
                        <div class="seat" data-value="E12"></div>
                        <div class="seat" data-value="E13"></div>
                        <div class="seat" data-value="E14"></div>
                        <div class="seat" data-value="E15"></div>
                        <div class="seat" data-value="E16"></div>
                        <div class="seat" data-value="E17"></div>
                        <div class="seat" data-value="E18"></div>
                        <div class="seat" data-value="E19"></div>
                        <div class="seat" data-value="E20"></div>
                    </div>
                </div>
                <ul class="seat-plan-legend">
                    <li>
                        <div class="seat"></div>
                        <p>Available</p>
                    </li>
                    <li>
                        <div class="seat selected"></div>
                        <p>Selected</p>
                    </li>
                    <li>
                        <div class="seat occupied"></div>
                        <p>Occupied</p>
                    </li>
                </ul>
                <div class="text-prompt">
                    <p>You have selected &nbsp;<span id="count">0</span>&nbsp; seats.</p>
                    <p id="selected-seats"></p>
                </div>
                <div class="button-container">
                    <form method="POST" action="./food.php">
                        <!-- This input is only used for restoring previously selected seats if any. This is not send to the POST -->
                        <input id="previous-selected-seats" type="hidden" value="<?php echo implode(", ", $previouslySelectedSeats) ?>">
                        <!-- This input is only used for retrieving occupied seats from database. This is not send to the POST -->
                        <input id="occupied-seats-db" type="hidden" value="<?php echo $occupiedSeatsString ?>">
                        <input id="submit-final-selected-seats" name="confirm-seats" type="hidden">
                        <input type="submit" value="Next" class="primary-button" id="next-button">
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
    <script src="../../scripts/pages/seatSelectionForPhp.js"></script>
</body>

</html>