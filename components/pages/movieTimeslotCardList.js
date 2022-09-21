var timeslotCardList = document.getElementById("time-slots-list");

//TO fetch the timeslot for only the movie selected.
var timeslot = [
  {
    location: "Jurong East",
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

const renderTimeslotCardList = () => {
  timeslotCardList.innerHTML = timeslot
    .map(
      (location, index) =>
        `
        <div class="location-card">
                    <div class="location-cell">${location.location}</div>
                    <div class="timeslot-title-cell">Time Slot</div>
                    <div class="date-cell">
                    <select name="date" class="date-picker">
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

const renderAvailableTimeSlot = () => {
  timeslot.map((location, index) => {
    const timeslotList = document.getElementById(`timeslot-cell-${index}`);
    timeslotList.innerHTML = location.timeslots
      .map((time) => `<p class="timeslot-card">${time}</p>`)
      .join("");
  });
};

const renderAvailableDates = () => {
  const dates = [];
  dates.push("Date"); //default value
  const currentDate = new Date();
  dates.push(`${currentDate.getDate()}-${currentDate.getMonth()}`);

  for (let i = 1; i <= 3; i++) {
    //add the next 3 days
    const dateToAdd = new Date(new Date().getTime() + i * 24 * 60 * 60 * 1000);
    dates.push(`${dateToAdd.getDate()}-${dateToAdd.getMonth()}`);
  }

  // const dateList = document.getElementById("date-picker");
  const dateList = document.getElementsByClassName("date-picker");

  for (let datePicker of dateList) {
    datePicker.innerHTML = dates
      .map(
        (date) =>
          `
          <option value="${date}">${date}</option>
          `
      )
      .join("");
  }
};
renderTimeslotCardList();
renderAvailableTimeSlot();
renderAvailableDates();
