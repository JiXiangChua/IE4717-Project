const cardHolderInput = document.getElementById("card-holder");
const cardNumberInput = document.getElementById("card-number");
const expiryDateInput = document.getElementById("expiry-date");
const cvcNumberInput = document.getElementById("cvc");
const emailInput = document.getElementById("email");

expiryDateInput.min = new Date().toISOString().split("T")[0];

const validateCardHolder = (event) => {
  var name = event.target.value;
  var validateExp = /^([A-Za-z\s]+)$/;

  var index = name.search(validateExp);

  if (index != 0) {
    alert(
      "You have entered your name wrongly.\n You can only input characters and spaces.\n Please check again!"
    );
    event.target.select();
  }
};

const validateCardNumber = (event) => {
  var cardNumber = event.target.value;
  var validateExp = /^\d{16}$/;

  var index = cardNumber.search(validateExp);

  if (index != 0) {
    alert(
      "You have entered an invalid credit card number. Credit card number should contain 16 digits. \nPlease verify again."
    );
    event.target.select();
    return false;
  }
};

const validateExpiryDate = (event) => {
  const currentDate = new Date();
  const expiryDate3Months = new Date(
    currentDate.setMonth(currentDate.getMonth() + 3)
  );
  var dateSelected = new Date(event.target.value);
  if (expiryDate3Months > dateSelected) {
    alert(
      "Your card must not have an expiry date less than 3 months. \nPlease verify again."
    );
    event.target.value = ""; //reset the date
    event.target.focus();
  }
};

const validateCvcNumber = (event) => {
  var cvc = event.target.value;
  var validateExp = /^\d{3}$/;

  var index = cvc.search(validateExp);

  if (index != 0) {
    alert(
      "You have entered an invalid CVC number. CVC number should contain 3 digits. \nPlease verify again."
    );
    event.target.select();
  }
};

const validateEmail = (event) => {
  var email = event.target.value;
  var validateExp = /^[\w-.]+@([A-za-z]+\.){1,3}[A-Za-z]{2,3}$/;

  var index = email.search(validateExp);

  if (index != 0) {
    alert(
      "You have entered an invalid email. The username should contain characters, '-' or '.' \n Followed by '@' and a domain name consisting two to four address extensions. \nPlease verify again."
    );
    event.target.select();
  }
};

cardHolderInput.addEventListener("change", validateCardHolder);
cardNumberInput.addEventListener("change", validateCardNumber);
expiryDateInput.addEventListener("change", validateExpiryDate);
cvcNumberInput.addEventListener("change", validateCvcNumber);
emailInput.addEventListener("change", validateEmail);
