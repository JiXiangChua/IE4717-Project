create table movies
(
    movieid int unsigned not null auto_increment primary key,
    title varchar(100) not null,
    imagePath varchar(255) not null,
    landscapeImagePath varchar(255) not null,
    imagePathForMovieDetails varchar(255) not null,
    imagePathForPayment varchar(255) not null,
    imdbRating float(2,1) unsigned not null,
    guidianceRating char(10) not null,
    duration int unsigned not null,
    `year` int unsigned not null,
    description text not null
);

create table upcomingMovies
(
    movieid int unsigned not null auto_increment primary key,
    title varchar(100) not null,
    imagePath varchar(255) not null
);