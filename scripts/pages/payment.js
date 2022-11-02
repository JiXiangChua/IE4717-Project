const renderMovieTicketDetails = () => {
  const title = document.getElementById("movie-title");
  const location = document.getElementById("cinema-location");
  const seats = document.getElementById("movie-seat-number");
  const date = document.getElementById("movie-date");
  const time = document.getElementById("movie-time");
  const moviePoster = document.getElementById("movie-poster");

  title.innerText = movie.title;
  location.innerText = `Cinema: ${selectedLocation}`;
  let selectedSeatsInString = selectedSeats.join(", ");
  seats.innerText = `Seats: ${selectedSeatsInString}`;
  let selectedDateString = selectedDate.replace("-", " / ");
  date.innerText = `Date:\n${selectedDateString}`;
  time.innerText = `Time:\n${selectedTime}`;

  moviePoster.setAttribute("src", movie.imagePathForPayment);
  moviePoster.setAttribute("alt", movie.title);
};

const renderPurchaseInvoice = () => {
  const purchases = [];
  let htmlCodes = "";
  const table = document.getElementById("table-container");

  htmlCodes = `<table class="invoice-table">
                    <tr class="row-bottom-border">
                        <td class="item-header-column">
                            Item</td>
                        <td class="qty-header-column">Qty</td>
                        <td class="cost-header-column">Cost</td>
                    </tr>`;

  /* Add all the purchased items into the array*/
  const numberOfTicketsPurchased = selectedSeats.length;
  purchases.push({
    item: "Standard Movie Ticket",
    qty: numberOfTicketsPurchased,
    cost: 10,
  });

  /* Write out all the purchase items in HTML */
  htmlCodes += purchases
    .map(
      (purchase) => `
    <tr>
        <td class="item-column">${purchase.item}</td>
        <td class="qty-column">${purchase.qty}</td>
        <td class="cost-column">$${purchase.cost}</td>
    </tr>
  `
    )
    .join("");

  /*Tabulate the total price */
  const totalPrice = purchases.reduce((sum, current) => {
    let subTotal = current.qty * current.cost;
    return (sum += subTotal);
  }, 0);

  htmlCodes += `<tr class="row-top-border">
                        <td class="item-column"></td>
                        <td class="qty-column">Total</td>
                        <td class="cost-column">S$ ${totalPrice}</td>
                    </tr>
                </table>`;

  table.innerHTML = htmlCodes;
};

renderMovieTicketDetails();
renderPurchaseInvoice();
