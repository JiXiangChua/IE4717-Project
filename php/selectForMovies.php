<?php
include "connectDB.php";

$movies = array();
$comingSoon = array();

$sql_movies = "SELECT * FROM movies";
$result_movies = $db->query($sql_movies);



if ($result_movies->num_rows > 0) {
    // output data of each row
    $movie_title_img = array();
    while($row = $result_movies->fetch_assoc()) {

      $movie_title_img["id"] = $row["movieid"];
      $movie_title_img["title"] = $row["title"];
      $movie_title_img["image"] = $row["imagePathForPayment"];
      echo "<script>console.log(" .$movie_title_img["id"]. "); </script>";
      array_push($movies, $movie_title_img);
    }
}

$sql_coming_soon = "SELECT * FROM upcomingMovies";
$result_coming = $db->query($sql_coming_soon);

if ($result_coming->num_rows > 0) {
    // output data of each row
    $coming_title_img = array();
    while($row = $result_coming->fetch_assoc()) {

        $coming_title_img["id"] = $row["movieid"];
        $coming_title_img["title"] = $row["title"];
        $coming_title_img["image"] = $row["imagePath"];
      echo "<script>console.log(" .$coming_title_img["id"]. "); </script>";
      array_push($comingSoon, $coming_title_img);
    }
}







?>