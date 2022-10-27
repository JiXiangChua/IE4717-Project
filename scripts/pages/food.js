// food.js
// item quantity counter function

var increment_button = document.getElementsByClassName("counter_button_inc");
var decrement_button = document.getElementsByClassName("counter_button_dec");
var food_selected = document.getElementById("foodSelected");

var food_array = new Array();

function button_clicked() {
  for (j = 0; j < decrement_button.length; j++) {
    var button = decrement_button[j];
    button.addEventListener("click", function (event) {
      var button_clicked = event.target;
      //   console.log(button_clicked);
      var input = button_clicked.parentElement.children[1];
      var quantity_value = input.value;
      var new_value;
      if (quantity_value > 0) {
        new_value = Number(quantity_value) - 1;
      } else {
        new_value = 0;
      }
      input.value = new_value;
      food_array["id"] = input.getAttribute("id");
      food_array["quantity"] = new_value;
      //console.log(food_array);
      food_selected.value = food_array;
    });
  }

  for (i = 0; i < increment_button.length; i++) {
    var button = increment_button[i];
    button.addEventListener("click", function (event) {
      var buttonClicked = event.target;
      //   console.log(buttonClicked);
      var input = buttonClicked.parentElement.children[1];
      // getting the input textbox based on the button clicked
      var quantity_value = input.value;
      // getting the value of the counter
      var new_value;
      if (quantity_value >= 9) {
        new_value = 9;
      } else {
        new_value = Number(quantity_value) + 1;
      }
      // based on the value + 1 to achieve the increment
      input.value = new_value;
      // write the number after increment to the input textbox
      food_array["id"] = input.getAttribute("id");
      food_array["quantity"] = new_value;
      //console.log(food_array);
      food_selected.value = food_array;
    });
  }
}

food_selected.addEventListener("change", showValue, false);

function showValue(event) {
  var result = event.currentTarget;
  console.log(result.value);
}

console.log(food_selected.value);

window.onload = button_clicked;
