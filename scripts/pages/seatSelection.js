const seatPlanContainer = document.querySelector(".seat-plan-container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)"); //select all the classes with seat that is not occupied
const count = document.getElementById("count");

//update count
const updateSelectedCount = () => {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  //   const seatsIndex = [...selectedSeats].map((seat) => {
  //     return [...seats].indexOf(seat);
  //   });

  //   sessionStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
};

seatPlanContainer.addEventListener("click", (event) => {
  //if seat is click but it cannot be an occupied seat:
  if (
    event.target.classList.contains("seat") &&
    !event.target.classList.contains("occupied")
  ) {
    event.target.classList.toggle("selected");
    console.log(event.target.getAttribute("data-value")); //get the id of the seat selected
  }

  updateSelectedCount();
});
