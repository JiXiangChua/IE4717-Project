//foodCardList.js

var combo_items = [
  {
    title: "setA",
    img: "../../images/pages/movies/set_1.png",
    title_price: "Combo Set A <br> S$9.90",
  },

  {
    title: "setB",
    img: "../../images/pages/movies/set_2.png",
    title_price: "Combo Set B <br> S$10.90",
  },
];

// {title:, img:, title_price: }

var snack_items = [
  {
    title: "popcorn",
    img: "../../images/pages/movies/popcorn.png",
    title_price: "Popcorn <br> S$8.90",
  },

  {
    title: "burger",
    img: "../../images/pages/movies/beef_burger.png",
    title_price: "Beef Burger <br> S$8.90",
  },

  {
    title: "hotDog",
    img: "../../images/pages/movies/hotdog.png",
    title_price: "Hot Dog <br> S$7.90",
  },
];

var drink_items = [
  {
    title: "softDrink",
    img: "../../images/pages/movies/softdrink.png",
    title_price: "Soft Drink <br> S$3.50",
  },

  {
    title: "water",
    img: "../../images/pages/movies/water.png",
    title_price: "Mineral Water <br> S$2.00",
  },

  {
    title: "hotTea",
    img: "../../images/pages/movies/hot_tea.png",
    title_price: "Hot Tea <br> S$2.90",
  },
];

function display_foodcard(array) {
  //   console.log(combo_items[0][1]);

  var foodcard = "";

  for (i = 0; i < array.length; i++) {
    foodcard += `
                <div class="food_card">
                <div class="item_img">
                         <img src="${array[i].img}">
                </div>
                    <div class="item_price">
                        <h5>${array[i].title_price}</h5>
                    </div>
                    <div class="quantity_counter">
                            <button class="counter_button_dec" id="${array[i].title}-" >-</button>
                            <input type="text" class="counter_display" value="0" disabled min="0" id="${array[i][2]}_counter">
                            <button class="counter_button_inc" id="${array[i].title}+">+</button>
                    </div>
                </div>`;
  }
  return foodcard;
}

document.getElementById("combo_sets").innerHTML = display_foodcard(combo_items);
document.getElementById("snacks").innerHTML = display_foodcard(snack_items);
document.getElementById("drinks").innerHTML = display_foodcard(drink_items);
