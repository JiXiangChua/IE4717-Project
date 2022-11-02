<?php
include('../../php/readSelectedMovieForMovieDetails.php');

?>
<html>

<head>
    <meta charset="utf-8">
    <title>Cineverse - Movie Details</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/movie-details.css">
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
            <div id="detail-container">
                <?php
                echo "<div class='movie-poster'>";
                echo "<img src='../../images/pages/movies/" . $selectedMovie["imagePathForMovieDetails"] . "' alt='" . $selectedMovie["title"] . "'>";
                echo "</div>";
                echo "<div class='detail-overlay'>";
                echo "<div class='detail'>";
                echo "<p class='movie-title'>" . $selectedMovie["title"] . "</p>";
                echo "<div class='movie-tags'>";
                echo "<div class='tag-label'>";
                echo "<img class='indicator-icon' src='../../images/icons/fa_imdb.png' alt='imdb'>";
                echo "<p>" . $selectedMovie["imdbRating"] . "</p>";
                echo "</div>";
                echo "<div class='tag-label'>";
                echo "<img class='indicator-icon' src='../../images/icons/fa_hd.png' alt='hd'>";
                echo "<p>" . $selectedMovie["guidianceRating"] . "</p>";
                echo "</div>";
                echo "<div class='tag-label'>";
                echo "<img class='indicator-icon' src='../../images/icons/fa_time.png' alt='time'>";
                echo "<p>" . $selectedMovie["duration"] . " mins</p>";
                echo "</div>";
                echo "<p>" . $selectedMovie["year"] . "</p>";
                echo "</div>";
                echo "<p class='movie-description'>" . $selectedMovie["description"] . "</p>";
                echo "<a href='#time-slots-list'>";
                echo "<button type='button' class='accent-button book-button'>Book Now</button>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                ?>
            </div>
            <div class="time-container" id="time-slots-list">
                <!-- Render HTML components from javascript.-->
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
    <!-- Render HTML reusable components scripts -->
    <script type="text/javascript" src="../../components/pages/movieTimeslotCardList.js"></script>
</body>

</html>