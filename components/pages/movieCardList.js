//movieCardList.js

import { availableMovies, upcomingMovies } from "../../utils/Constants.js";

var movie_list = [...availableMovies];

var movie_list_coming_soon = [...upcomingMovies];
//using 2 dimensions array to store the movie title and image location

function display_movie_list(array) {
  var movie = "";
  for (let i = 0; i < array.length; i++) {
    movie += `<div class="movie_card">
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
    movie += `<div class="movie_card">
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
