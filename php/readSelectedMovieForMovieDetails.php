<?php

include('connectDB.php');

session_start();

if (isset($_GET['movieid'])) {
    $id = $_GET['movieid'];
    $_SESSION['movieid'] = $id;
    header('location: ' . $_SERVER['PHP_SELF']);
    exit; //stop executing and refresh the page again based on the header();
}

$query = "SELECT * from movies where movieid='" . $_SESSION['movieid'] . "';";
$stmt = $db->prepare($query);
$stmt->execute();

$results = $stmt->get_result(); //only fetched one result that matches the id

$row = $results->fetch_assoc();

$selectedMovie = array();
$selectedMovie["id"] = $row["movieid"];
$selectedMovie["title"] = $row["title"];
$selectedMovie["imagePath"] = $row["imagePath"];
$selectedMovie["landscapeImagePath"] = $row["landscapeImagePath"];
$selectedMovie["imagePathForMovieDetails"] = $row["imagePathForMovieDetails"];
$selectedMovie["imagePathForPayment"] = $row["imagePathForPayment"];
$selectedMovie["imdbRating"] = $row["imdbRating"];
$selectedMovie["guidianceRating"] = $row["guidianceRating"];
$selectedMovie["duration"] = $row["duration"];
$selectedMovie["year"] = $row["year"];
$selectedMovie["description"] = $row["description"];

$_SESSION['movieTitle'] = $selectedMovie["title"];

$db->close();

?>