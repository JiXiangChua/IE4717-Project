var timeslotCardList = document.getElementById("time-slots-list");

//TO fetch the timeslot for only the movie selected.
var timeslot = [
  {
    location: "Jurong",
    timeslots: [
      "10:00",
      "11:00",
      "12:00",
      "14:00",
      "15:30",
      "17:30",
      "18:00",
      "19:00",
    ],
  },
  {
    location: "Orchard",
    timeslots: ["11:30", "14:30", "17:00", "19:30"],
  },
  {
    location: "Tampines",
    timeslots: ["11:00", "13:30", "15:30", "17:30", "21:00"],
  },
];

const onPageLoad = () => {
  sessionStorage.removeItem("selectedSession");
};

const renderTimeslotCardList = () => {
  timeslotCardList.innerHTML = timeslot
    .map(
      (location, index) =>
        `
        <div class="location-card">
                    <div class="location-cell">${location.location}</div>
                    <div class="timeslot-title-cell">Time Slot</div>
                    <div class="date-cell">
                    <select name="date" class="date-picker" id="date-picker-${location.location}">
                      <option value="" selected>Date</option>
                    </select>
                    </div>
                    <div id="timeslot-cell-${index}">
                    </div>
                </div>
        `
    )
    .join("");
};

const renderAvailableTimeSlot = (selectedDate = "") => {
  timeslot.map((location, index) => {
    const timeslotList = document.getElementById(`timeslot-cell-${index}`);
    timeslotList.innerHTML = location.timeslots
      .map(
        (time) =>
          `<div class="timeslot-card" data-location=${location.location} data-time=${time} data-date=${selectedDate}>${time}</div>`
      )
      .join("");
  });
};

const renderAvailableDates = () => {
  const dates = [];
  dates.push("Date"); //default value
  const currentDate = new Date();
  const actualMonth = currentDate.getMonth() + 1;
  dates.push(`${currentDate.getDate()}-${actualMonth > 11 ? 1 : actualMonth}`);

  for (let i = 1; i <= 3; i++) {
    //add the next 3 days
    const dateToAdd = new Date(new Date().getTime() + i * 24 * 60 * 60 * 1000);
    const actualMonthToAdd = dateToAdd.getMonth() + 1;
    dates.push(
      `${dateToAdd.getDate()}-${actualMonthToAdd > 11 ? 1 : actualMonth}`
    );
  }

  // const dateList = document.getElementById("date-picker");
  const dateList = document.getElementsByClassName("date-picker");

  for (let datePicker of dateList) {
    datePicker.innerHTML = dates
      .map((date) =>
        date === "Date"
          ? `
          <option value="${date}" selected disabled>${date}</option>
          `
          : `
          <option value="${date}">${date}</option>
          `
      )
      .join("");
  }
};

const addEventListenerToDateSelector = () => {
  timeslot.map((location, index) => {
    let selector = document.getElementById(`date-picker-${location.location}`);

    selector.addEventListener("change", () => {
      renderAvailableTimeSlot(selector.value);
      addEventListenerToTimeslots();
    });
  });
};

const navigate = (location, date, time) => {
  if (!date) {
    alert("Please select a date from one of the locations listed.");
  } else {
    sessionStorage.setItem(
      "selectedSession",
      JSON.stringify([location, date, time])
    );
    window.location.href = `../../pages/movies/seatSelection.php?location=${location}&date=${date}&time=${time}`; //pass selected date&time as url
  }
};

const addEventListenerToTimeslots = () => {
  const timeslotCards = document.getElementsByClassName("timeslot-card");
  const timeslotCardsArray = [...timeslotCards]; //type cast to array

  timeslotCardsArray.map((card) => {
    card.addEventListener("click", () => {
      navigate(
        card.getAttribute("data-location"),
        card.getAttribute("data-date"),
        card.getAttribute("data-time")
      );
    });
  });
};

onPageLoad();
renderTimeslotCardList();
renderAvailableTimeSlot();
renderAvailableDates();
addEventListenerToDateSelector();
addEventListenerToTimeslots();
