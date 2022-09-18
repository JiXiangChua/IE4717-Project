var top5MovieCardList = document.getElementById("top5-card-list");
var recommendedMovieCardList = document.getElementById("recommended-card-list");

var top5Movies = [
  {
    title: "Black Widow",
    image: "./images/pages/home/movie-blackwidow.png",
    rating: 5,
  },
  {
    title: "Doctor Strange In The Multiverse of Maddness",
    image: "./images/pages/home/movie-doctorstrange.jpg",
    rating: 9,
  },
  {
    title: "1917",
    image: "./images/pages/movies/movide-detail-1917.jpg",
    rating: 8,
  },
  {
    title: "Jumanji: The Next Level",
    image: "./images/pages/home/movie-jumanji.png",
    rating: 7,
  },
  {
    title: "John Wick",
    image: "./images/pages/home/movie-johnwick.png",
    rating: 6,
  },
];

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

const init = () => {
  renderTop5MovieCardList();
  renderRecommendedMovieCardList();
};

const renderTop5MovieCardList = () => {
  const sortedMoviesInDesc = top5Movies.sort((a, b) => b.rating - a.rating);

  top5MovieCardList.innerHTML = sortedMoviesInDesc
    .map(
      (movie, index) =>
        `<div>
            <div class="top5-Card">
                <div class="rank-number">${index + 1}</div>
                <div class="top5-movie">
                    <img src="${movie.image}" alt="${movie.title}">
                    <p>${movie.title}</p>
                </div>
            </div>
        </div>`
    )
    .join("");
};

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

window.onload = init;
