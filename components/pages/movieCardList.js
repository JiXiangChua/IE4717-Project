//movieCardList.js

var movie_list = [
  {
    title: "Jumanji: The Next Level",
    img: "../../images/pages/movies/movie-jumanji.jpg",
  },

  {
    title: "Doctor Stange In the Multiverse of Maddness",
    img: "../../images/pages/movies/movie-doctorStrange.jpg",
  },

  { title: "1917", img: "../../images/pages/movies/movie-1917.jpg" },

  {
    title: "Spider-Man: No Way Home",
    img: "../../images/pages/movies/movie-spiderman.jpg",
  },

  { title: "Deadpool 3", img: "../../images/pages/movies/movie-spiderman.jpg" },

  { title: "NOPE", img: "../../images/pages/movies/movie-nope.jpg" },

  { title: "JOHN WICK", img: "../../images/pages/movies/movie-johnwick.jpg" },

  {
    title: "Black Widow",
    img: "../../images/pages/movies/movie-blackwindow.jpg",
  },

  { title: "Moonlight", img: "../../images/pages/movies/movie-moonlight.jpg" },

  {
    title: "The Martian",
    img: "../../images/pages/movies/movie-bringmehome.jpg",
  },

  {
    title: "DC: SuperPets",
    img: "../../images/pages/movies/movie-superpets.jpg",
  },
];

var movie_list_coming_soon = [
  { title: "Us(R18)", img: "../../images/pages/movies/movie-us.jpg" },
  {
    title: "10 things I hate about you",
    img: "../../images/pages/movies/movie-hate.jpg",
  },
  {
    title: "Jurassic Park",
    img: "../../images/pages/movies/movie-jurassic.jpg",
  },

  {
    title: "007: No time to die",
    img: "../../images/pages/movies/movie-007.jpg",
  },
];
//using 2 dimensions array to store the movie title and image location

function display_movie_list(array) {
  console.log(array[0][1]);
  var movie = "";
  for (i = 0; i < array.length; i++) {
    movie += `<div class="movie_card">
          <div class="movie_img">
              <img src="${array[i].img}">
          </div>
          <h5>${array[i].title}</h5>
      </div>`;
  }
  return movie;
}

function display_movie_list_coming_soon(array) {
  console.log(array[0][1]);
  var movie = "";
  for (i = 0; i < array.length; i++) {
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
