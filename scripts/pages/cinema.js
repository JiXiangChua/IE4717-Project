// cinema.js

//slideshow

let slideIndex = 1;
showSlides(slideIndex);

function slideAction(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;

  let slides = document.getElementsByClassName("cinema_slide");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    // dots[i].className = dots[i].className.replace("active", "");
    if (slideIndex == i + 1) {
      dots[i].classList.add("dot-active");
    } else {
      dots[i].classList.remove("dot-active");
    }
  }

  slides[slideIndex - 1].style.display = "block";
}
