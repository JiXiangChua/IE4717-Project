import { availableMovies } from "../../utils/Constants.js";

var recommendedMovieCardList = document.getElementById("recommended-card-list");

var recommendedMovies = availableMovies
  .sort((a, b) => b.imdbRating - a.imdbRating)
  .slice(5); //list those not listed on top 5 category

const renderRecommendedMovieCardList = () => {
  recommendedMovieCardList.innerHTML = recommendedMovies
    .map(
      (movie) =>
        `<div class="recommended-card" data-value="${movie.id}">
              <img src="${movie.image}" alt="${movie.title}">
              <p>${movie.title}</p>
          </div>`
    )
    .join("");
};

const navigate = (id) => {
  const destinationPayload = recommendedMovies.filter(
    (movie) => movie.id == id
  );
  sessionStorage.setItem(
    "movieDetailsPage",
    JSON.stringify(destinationPayload)
  );
  window.location.href = "./pages/movies/movieDetails.html";
};

const addEventListenerToRecommendedCard = () => {
  const recommendedCard = document.getElementsByClassName("recommended-card");
  const recommendedCardArray = [...recommendedCard]; //type cast to array

  recommendedCardArray.map((card) => {
    card.addEventListener("click", () => {
      navigate(card.getAttribute("data-value"));
    });
  });
};

renderRecommendedMovieCardList();
addEventListenerToRecommendedCard();
