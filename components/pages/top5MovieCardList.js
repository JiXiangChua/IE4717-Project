import { availableMovies } from "../../utils/Constants.js";

var top5MovieCardList = document.getElementById("top5-card-list");

var top5Movies = availableMovies
  .sort((a, b) => b.imdbRating - a.imdbRating)
  .slice(0, 5); //top 5 movies

const onPageLoads = () => {
  //sessionStorage.clear(); //To reconsider if want to clear out memory
};

const renderTop5MovieCardList = () => {
  const sortedMoviesInDesc = [...top5Movies];

  top5MovieCardList.innerHTML = sortedMoviesInDesc
    .map(
      (movie, index) =>
        `<div>
              <div class="top5-Card" data-value="${movie.id}">
                  <div class="rank-number">${index + 1}</div>
                  <div class="top5-movie">
                      <img src="${movie.landscapeImage}" alt="${movie.title}">
                      <p>${movie.title}</p>
                  </div>
              </div>
          </div>`
    )
    .join("");
};

const navigate = (id) => {
  const destinationPayload = top5Movies.filter((movie) => movie.id == id);
  window.location.href = "./pages/movies/movieDetails.html";
};

const addEventListenerToTop5Card = () => {
  const top5Cards = document.getElementsByClassName("top5-Card");
  const top5CardsArray = [...top5Cards]; //type cast to array

  top5CardsArray.map((card) => {
    card.addEventListener("click", () => {
      navigate(card.getAttribute("data-value"));
    });
  });
};

onPageLoads();
renderTop5MovieCardList();
addEventListenerToTop5Card();
