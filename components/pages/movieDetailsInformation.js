import { availableMovies } from "../../utils/Constants.js";

var detailContainer = document.getElementById("detail-container");

const payloadFromPreviousPage = JSON.parse(
  sessionStorage.getItem("movieDetailsPage")
);

const tempSelectedMovie = availableMovies.filter(
  (movie) => movie.id === payloadFromPreviousPage[0].id
)[0]; //returns the selected movie javascript object details

// console.log(tempSelectedMovie);

detailContainer.innerHTML = `
    <div class="movie-poster">
        <img src="${tempSelectedMovie.imagePathForMovieDetails}" alt="${tempSelectedMovie.title}">
    </div>
    <div class="detail-overlay">
        <div class="detail">
            <p class="movie-title">${tempSelectedMovie.title}</p>
            <div class="movie-tags">
                <div class="tag-label">
                    <img class="indicator-icon" src="../../images/icons/fa_imdb.png" alt="imdb">
                    <p>${tempSelectedMovie.imdbRating}</p>
                </div>
                <div class="tag-label">
                    <img class="indicator-icon" src="../../images/icons/fa_hd.png" alt="hd">
                    <p>${tempSelectedMovie.guidianceRating}</p>
                </div>
                <div class="tag-label">
                    <img class="indicator-icon" src="../../images/icons/fa_time.png" alt="time">
                    <p>${tempSelectedMovie.duration} mins</p>
                </div>
                <p>${tempSelectedMovie.year}</p>
            </div>
            <p class="movie-description">${tempSelectedMovie.description}</p>
            <a href="#time-slots-list">
                <button type="button" class="accent-button book-button">Book Now</button>
            </a>
        </div>
    </div>
`;
