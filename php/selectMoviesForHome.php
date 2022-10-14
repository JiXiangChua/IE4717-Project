<?php

include('./php/connectDB.php');

$top5movies = array();
$movies = array();

$query = "SELECT * from movies ORDER BY imdbRating DESC";
$stmt = $db->prepare($query);
$stmt->execute();

// store results in $results
$results = $stmt->get_result();
$num_results = $results->num_rows;

for ($i = 0; $i < $num_results; $i++)
{
    $row = $results->fetch_assoc();
    $movieDetails = array();
    if ($i < 5)
    {
        $movieDetails["id"] = $row["movieid"];
        $movieDetails["title"] = $row["title"];
        $movieDetails["imagePath"] = $row["imagePath"];
        $movieDetails["landscapeImagePath"] = $row["landscapeImagePath"];
        $movieDetails["imagePathForMovieDetails"] = $row["imagePathForMovieDetails"];
        $movieDetails["imagePathForPayment"] = $row["imagePathForPayment"];
        $movieDetails["imdbRating"] = $row["imdbRating"];
        $movieDetails["guidianceRating"] = $row["guidianceRating"];
        $movieDetails["duration"] = $row["duration"];
        $movieDetails["year"] = $row["year"];
        $movieDetails["description"] = $row["description"];

        array_push($top5movies, $movieDetails);
    }
    else
    {
        $movieDetails["id"] = $row["movieid"];
        $movieDetails["title"] = $row["title"];
        $movieDetails["imagePath"] = $row["imagePath"];

        array_push($movies, $movieDetails);
    }

}

$db->close();

// print_r($movies); //For debugging

?>