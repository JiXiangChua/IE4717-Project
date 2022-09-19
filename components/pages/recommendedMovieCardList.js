var recommendedMovieCardList = document.getElementById("recommended-card-list");

var recommendedMovies = [
  {
    title: "Spider-Main: No Way Home",
    image: "./images/pages/movies/movie-spiderman.jpg",
  },
  {
    title: "DC: SuperPets",
    image: "./images/pages/movies/movie-superpets.jpg",
  },
  {
    title: "Deadpool 3",
    image: "./images/pages/movies/movie-deadpool.png.webp",
  },
  {
    title: "Nope",
    image: "./images/pages/movies/movie-nope.jpeg",
  },
  {
    title: "Moonlight",
    image: "./images/pages/movies/movie-moonlight.jpeg",
  },
];

const renderRecommendedMovieCardList = () => {
  recommendedMovieCardList.innerHTML = recommendedMovies
    .map(
      (movie) =>
        `<div class="recommended-card">
              <img src="${movie.image}" alt="${movie.title}">
              <p>${movie.title}</p>
          </div>`
    )
    .join("");
};

renderRecommendedMovieCardList();
