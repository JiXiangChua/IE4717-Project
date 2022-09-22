var detailContainer = document.getElementById("detail-container");

//get movie information from the previous page
tempSelectedMovie = {
  title: "1917",
  imagePath: "../../images/pages/movies/movide-detail-1917.jpg",
  imdbRating: "8.4",
  guidianceRating: "PG13",
  duration: "140",
  year: "2022",
  description: `1917 is a 2019 war film directed and produced by Sam Mendes, who
  co-wrote the film with Krysty Wilson-Cairns. Partially inspired by stories told to Mendes by
  his paternal grandfather Alfred about his service during World War I, the film takes
  place after the German retreat to the Hindenburg Line during Operation Alberich, and follows
  two British soldiers.`,
};

detailContainer.innerHTML = `
    <div class="movie-poster">
        <img src="${tempSelectedMovie.imagePath}" alt="${tempSelectedMovie.title}">
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
