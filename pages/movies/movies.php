<?php
include ('../../php/selectForMovies.php');

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
    <title>Cineverse - Movie Listing</title>
    <link rel="stylesheet" href="../../styles/globals/main.css">
    <link rel="stylesheet" href="../../styles/pages/movie.css">
    <script src="../../scripts/globals/navBarActiveLink.js" defer></script>
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

    <div class="movie_container">

        <h1>Now Showing</h1>
        <br>

        <div class="now_showing">

            <div class="movie_card_list" id="movie_card_list">
                <!-- <div class="movie_card">
                            <div class="movie_img">
                                <img src="../../images/pages/movies/movie-doctorStrange.jpg">
                            </div>
                            <h5>Doctor Stange In the Multiverse of Maddness</h5>
                        </div> -->
                <?php
                for($i=0;$i<count($movies);$i++){
                    $movie_card = $movies[$i];
                    echo "<a href='../../pages/movies/movieDetails.php?movieid=" . $movie_card["id"] . "' style='text-decoration: none'>";
                    echo "<div class='movie_card' id='".$movie_card["id"]."'>";
                    echo "<div class='movie_img'>";
                    echo "<img src='../../images/pages/movies/".$movie_card["image"]."'>";
                    echo "</div>";
                    echo "<h5>".$movie_card["title"]."</h5>";
                    echo "</div>";
                    echo "</a>";
                }
                ?>
                <!-- movie image and title are retrieved from database -->
                <!-- Jumanji image change to jpg in database -->

            </div>
        </div>

        <br><br><br>



        <h1>Coming Soon</h1>
        <br>

            <div class="coming_soon">
                    <div class="movie_card_list_coming_soon" id="coming_soon_movie_list">

                        <!-- <div class="movie_card">
                            <div class="movie_img_coming_soon">
                                <img src="../../images/pages/movies/movie-us.jpg">
                            </div>
                            <h5>us(R18)</h5>
                        </div> -->
                        <?php
                        for($i=0;$i<count($comingSoon);$i++){
                        $movie_card = $comingSoon[$i];
                        echo "<a href='../../pages/movies/upcomingMovieDetails.php?movieid=" . $movie_card["id"] . "' style='text-decoration: none'>";
                        echo "<div class='movie_card' id='".$movie_card["id"]."'>";
                        echo "<div class='movie_img'>";
                        echo "<img src='../../images/pages/movies/".$movie_card["image"]."'>";
                        echo "</div>";
                        echo "<h5>".$movie_card["title"]."</h5>";
                        echo "</div>";
                        echo "</a>";
                        }
                        ?>
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

    


</body>


</html>