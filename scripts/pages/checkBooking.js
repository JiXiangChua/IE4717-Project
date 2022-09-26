// Check Booking Validation

var input = document.getElementById("transaction_number");

input.addEventListener("change", validation, false);

function validation(event) {
  var input_number = event.currentTarget;
  var regNumber = input_number.value.search(/^[0-9]{9}$/);

  if (regNumber != 0) {
    console.log("check");
    alert(
      "The transaction number " +
        input_number.value +
        " you entered is not correct!"
    );
    input_number.focus();
    input_number.select();
  }
}
