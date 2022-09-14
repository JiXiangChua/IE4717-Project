//console.log(window.location)
const activeLink = window.location.pathname;
const navLinks = document.querySelectorAll("nav a");
navLinks.forEach((link) => {
  if (link.href.includes(`${activeLink}`)) {
    link.classList.add("nav-item-active");
  }
});

//execute navLinks function after page has loaded by using the defer attribute in html script tag
