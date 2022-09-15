//console.log(window.location);
const activeLink = window.location.pathname;
const navLinks = document.querySelectorAll("nav a");
navLinks.forEach((link) => {
  if (activeLink == "/IE4717/Project/") {
    //to cater for the index path where index.html is not stated in the Url Query.
    document
      .querySelectorAll(".nav-items a")[0]
      .classList.add("nav-item-active");
    return;
  }
  if (link.href.includes(`${activeLink}`)) {
    link.classList.add("nav-item-active");
  }
});

//execute navLinks function after page has loaded by using the defer attribute in html script tag
