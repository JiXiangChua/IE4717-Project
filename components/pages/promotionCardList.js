var promoCardList = document.getElementById("promo-card-list");

var promotions = [
  {
    title: "Value Deal for Two",
    description: `Bring your buddy and enjoy this special movie bundle
    <br /><br />
    For just $28 (Mon - Thu) or $36 (Fri-Sun), you'll get:
    <br /><br />
    2 Movie Tickets<br />
    A Medium Popcorn<br />
    A Regular Soda<br />
    A tub of Pringles(42g) - choose between Original or Sour Cream`,
    image: "../../images/pages/promotions/promo-1.png",
  },
  {
    title: "Enjoy Senior Privileges",
    description: `Present your senior identity card to purchase a movie ticket at $5 each.`,
    image: "../../images/pages/promotions/promo-2.png",
  },
  {
    title: "Student Privileges",
    description: `Present your student identity card to purchase a movie ticket at $7 each.`,
    image: "../../images/pages/promotions/promo-3.png",
  },
  {
    title: "NS55 Credits with LifeSG",
    description: `You can now use your NS55 Credits to purchase movie tickets and food at no limit.<br /><br />
    Enjoy additional 10% discount upon checkout.
    `,
    image: "../../images/pages/promotions/promo-4.png",
  },
  {
    title: "HSBC Card Privileges",
    description: `As a member of HSBC, you are entitled to $2 off movie tickets on weekdays only. <br /><br />
    This promotion does not apply to weekends.`,
    image: "../../images/pages/promotions/promo-5.png",
  },
  {
    title: "Redeem your Healthpoint Rewards",
    description: `Health Promotion Board vouchers now accepted at all Cineverse cinemas!<br /><br />
    Present your digital or physical vouchers at our Box Office to redeem your tickets.`,
    image: "../../images/pages/promotions/promo-6.png",
  },
  {
    title: "Its your birthday month!",
    description: `Happy birthday to you and thank you for choosing us as your preferred cinema!<br /><br />
    To help you celebrate your special month, you are entitled to purchase 2 movie tickets at the price of 1.<br /><br />
    Present your Identity card at our box office for verification to enjoy the privilege!`,
    image: "../../images/pages/promotions/promo-7.png",
  },
];

const renderPromoCardList = () => {
  promoCardList.innerHTML = promotions
    .map(
      (promo) =>
        `<div class="promo-card">
            <img src="${promo.image}">
            <div class="promo-card-overlay">
                <div class="promo-card-overlay-title">
                    ${promo.title}
                </div>
                <div class="promo-card-overlay-description">
                    <p>${promo.description}</p>
                </div>
            </div>
        </div>`
    )
    .join("");
};

renderPromoCardList();
