<?php
include('./php/selectMoviesForHome.php');
session_start();

if (isset($_SESSION))
{
    //unset all session variables if it has values
    session_destroy();
    session_start();
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Cineverse - Movie Tickets</title>
    <link rel="stylesheet" href="./styles/globals/main.css">
    <link rel="stylesheet" href="./styles/pages/home.css">
    <script src="./scripts/globals/navBarActiveLink.js" defer></script>
    <!-- defer means the script will run parallel when parsing the page and after it loads finish, it will execute the script -->
</head>

<body>
    <div id="wrapper">
        <nav class="nav-container">
            <img id="cineverse-logo" src="./images/icons/cineverse_logo.png" alt="cineverse_logo">
            <div class="nav-items">
                <a href="./index.php">Home</a>
                <a href="./pages/movies/movies.php">Movies</a>
                <a href="./pages/cinemas/cinema.html">Cinemas</a>
                <a href="./pages/promotions/promotion.html">Promotions</a>
                <a href="./pages/checkbooking/checkbooking.html">Check Booking</a>
            </div>
        </nav>
        <div class="trailer-container">
            <video id="opening-trailer" autoplay muted loop>
                <source src="./images/pages/home/jumanji_trim_crop.mp4" type="video/mp4">
            </video>
            <div class="bottom-chevron-container">
                <a href='#top5-container'>
                    <img class='chevron' src="./images/icons/chevron-arrow-down.png"></img>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="top5-container" id="top5-container">
                <h1>Top 5</h1>
                <div class="horizontal-scroll-container">
                    <div id="top5-card-list">
                        <!-- Render HTML components from Php -->
                        <?php
                        for ($i = 0; $i < count($top5movies); $i++)
                        {
                            $movie = $top5movies[$i];
                            echo "<a href='./pages/movies/movieDetails.php?movieid=" . $movie["id"] . "' style='text-decoration: none'>";
                            echo "<div>";
                            echo "<div class='top5-Card' data-value='" . $movie["id"] . "'>";
                            echo "<div class='rank-number'>" . ($i + 1) . "</div>";
                            echo "<div class='top5-movie'>";
                            echo "<img src='" . "./images/pages/home/" . $movie["landscapeImagePath"] . "' alt='" . $movie["title"] . "'>";
                            echo "<p>" . $movie["title"] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="recommended-container">
                <h1>Recommended</h1>
                <div class="horizontal-scroll-container">
                    <div id="recommended-card-list">
                        <!-- Render HTML components from php -->
                        <?php
                        for ($i = 0; $i < count($movies); $i++)
                        {
                            $movie = $movies[$i];
                            echo "<a href='./pages/movies/movieDetails.php?movieid=" . $movie["id"] . "' style='text-decoration: none'>";
                            echo "<div class='recommended-card' data-value='" . $movie["id"] . "'>";
                            echo "<img src='" . "./images/pages/movies/" . $movie["imagePath"] . "' alt='" . $movie["title"] . "'>";
                            echo "<p>" . $movie["title"] . "</p>";
                            echo "</div>";
                            echo "</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="cinema-content-container">
                <div class="cinema-hall-content">
                    <img src="./images/pages/home/Cinema Seats.jpg">
                    <div class="cinema-hall-content-description">
                        <h3>Immersive, Enjoyable</h3>
                        <p>Each theatre hall can accomdate up to 100 seats, designed by Figueras. Each seat is highly
                            comfortable with
                            generous dimensions. There is sufficient legroom between each row of
                            seats, allowing you to view your movie in a more comfortable and relaxed position.
                        </p>
                    </div>
                </div>
                <div class="cinema-speakers-content">
                    <video id="dolby-atmos" autoplay muted loop>
                        <source src="./images/pages/home/Dolby_Atmos.mp4" type="video/mp4">
                    </video>
                    <div class="dolby-atmos-description">
                        <h3>Experience the Best 7.1 Surround Sound </h3>
                        <p>Be part of the storytelling with Dolby Atmos. <br> Embrace the one of a kind cinematic audio
                            experience.
                        </p>
                    </div>
                </div>
                <div class="cinema-imax-content">
                    <img src="./images/pages/home/imax.png">
                </div>
            </div>
        </div>
        <footer class="footer-container">
            <img id="cineverse-logo" src="./images/icons/cineverse_logo.png" alt="cineverse_logo">
            <div class="link-container">
                <a href="">About</a>
                <a href="">FAQs</a>
                <a href="">Contact Us</a>
                <a href="">Terms of Service</a>
            </div>
            <div class="social-media-icons">
                <img id="social-media-icon" src="./images/icons/facebook-icon.png" alt="facebook-icon">
                <img id="social-media-icon" src="./images/icons/instagram-icon.png" alt="instagram-icon">
            </div>
            <p>&copy; COPYRIGHT 2022 IE4717 F38-DG05 | CHUA JI XIANG | TANG ZHAO SHENG </p>
        </footer>
    </div>
    <!-- <script type="text/javascript" src="./scripts/pages/home.js"></script> -->
    <!-- <script type="module" src="./components/pages/top5MovieCardList.js"></script>
    <script type="module" src="./components/pages/recommendedMovieCardList.js"></script> -->
</body>

</html>