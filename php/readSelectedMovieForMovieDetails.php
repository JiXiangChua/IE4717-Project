<?php

include('connectDB.php');

session_start();

$id = $_GET['movieid'];
$_SESSION['movieid'] = $id;

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


?>