//movieCardList.js

import { availableMovies, upcomingMovies } from "../../utils/Constants.js";

var movie_list = [...availableMovies];

var movie_list_coming_soon = [...upcomingMovies];

//Insert the 2 dimension array from constants.js which contains all movie details

function display_movie_list(array) {
  var movie = "";
  for (let i = 0; i < array.length; i++) {
    movie += `<div class="movie_card" id="${array[i].id}">
          <div class="movie_img">
              <img src="${array[i].imagePathForPayment}">
          </div>
          <h5>${array[i].title}</h5>
      </div>`;
  }
  return movie;
}

function display_movie_list_coming_soon(array) {
  var movie = "";
  for (let i = 0; i < array.length; i++) {
    movie += `<div class="movie_card" >
            <div class="movie_img_coming_soon">
                <img src="${array[i].img}">
            </div>
            <h5>${array[i].title}</h5>
        </div>`;
  }
  return movie;
}

document.getElementById("movie_card_list").innerHTML =
  display_movie_list(movie_list);

document.getElementById("coming_soon_movie_list").innerHTML =
  display_movie_list_coming_soon(movie_list_coming_soon);

function movieSelected() {
  var movieCard = document.getElementsByClassName("movie_card");
  var movieCardArray = [...movieCard];

  for (let k = 0; k < movieCardArray.length; k++) {
    // console.log(movieCardArray[k]);
    var movie_select = movieCardArray[k];

    movie_select.addEventListener("click", function (event) {
      var movie = event.target.parentElement.parentElement;

      var movie_id = movie.getAttribute("id");
      // collect the id of the movie selected

      const movie_details = movie_list.find((obj) => obj.id == movie_id);
      const movie_details_payload = [movie_details];
      //based on the movie id to retrieve the movie details from the array

      sessionStorage.setItem(
        "movieDetailsPage",
        JSON.stringify(movie_details_payload)
      );

      console.log(movie_details_payload);
      window.location.href = "movieDetails.html";
    });
  }
}

movieSelected();
