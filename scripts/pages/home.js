var top5MovieCardList = document.getElementById("top5-card-list");

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

const init = () => {
  renderTop5MovieCardList();
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
                    <img src="${movie.image}">
                    <p>${movie.title}</p>
                </div>
            </div>
        </div>`
    )
    .join("");

  console.log("Running");
};

window.onload = init;
