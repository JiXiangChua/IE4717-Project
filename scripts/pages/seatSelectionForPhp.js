const seatPlanContainer = document.querySelector(".seat-plan-container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)"); //select all the classes with seat that is not occupied
const count = document.getElementById("count");
const selectSeatsList = document.getElementById("selected-seats");
const nextButton = document.getElementById("next-button");
const submitFinalSelectedSeats = document.getElementById(
  "submit-final-selected-seats"
);
const previouslySelectedSeats = document.getElementById(
  "previous-selected-seats"
);

var updatedSelectedSeatList = [];

var occupiedSeats = [
  "A1",
  "A2",
  "A16",
  "A17",
  "B8",
  "B9",
  "B10",
  "C14",
  "C15",
  "E19",
  "E20",
]; //take from database

//restore already occupied seats:
const renderOccupiedSeats = () => {
  if (occupiedSeats !== null && occupiedSeats.length > 0) {
    seats.forEach((seat) => {
      if (occupiedSeats.includes(seat.getAttribute("data-value"))) {
        seat.classList.add("occupied");
      }
    });
  }
};

//update count
const updateSelectedCount = () => {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const selected = [];

  selectedSeats.forEach((seat) => {
    selected.push(seat.getAttribute("data-value"));
  });

  //update count of selected seats
  const selectedSeatsCount = selectedSeats.length;
  count.innerText = selectedSeatsCount;

  //display the seat number selected
  if (selected.length > 0) {
    const listOfSelectedSeats = selected.join(", ");

    selectSeatsList.innerText = `Selected: ${listOfSelectedSeats}`;
  } else {
    selectSeatsList.innerText = "";
  }

  updatedSelectedSeatList = [...selected];
  submitFinalSelectedSeats.value = updatedSelectedSeatList.join("-"); //update POST method value
};

//restore user previously selected seats
const renderPreviousSelectedSeats = () => {
  const selectedSeats = previouslySelectedSeats.value.split(", "); //get from html where the php variable is inserted.

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat) => {
      if (selectedSeats.includes(seat.getAttribute("data-value"))) {
        seat.classList.add("selected");
      }
    });
  }

  updateSelectedCount();
};

seatPlanContainer.addEventListener("click", (event) => {
  //if seat is click but it cannot be an occupied seat:
  if (
    event.target.classList.contains("seat") &&
    !event.target.classList.contains("occupied")
  ) {
    event.target.classList.toggle("selected");
    //console.log(event.target.getAttribute("data-value")); //get the id of the seat selected
  }

  updateSelectedCount();
});

//functions that execute when page loads:
renderOccupiedSeats();
renderPreviousSelectedSeats();
