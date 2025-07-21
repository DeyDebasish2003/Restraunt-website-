<?php
session_start();
include("connection.php");

// Redirect to login if not logged in
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Multi-Cuisine Menu</title>
  <style>
    button{
        font-family: cursive;
    }
    body {
      font-family: cursive;
      background-color: antiquewhite;
      margin: 0;
      padding: 20px;
    }
    h1 {
      font-size: 50px;
      text-align: center;
      margin-bottom: 30px;
    }
    .category {
      margin-bottom: 50px;
    }
    .dishes {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .dish {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      padding: 15px;
      width: 300px;
    }
    .dish img {
      width: 100%;
      border-radius: 10px;
    }
    .dish h3 {
      margin: 10px 0 5px;
    }
    .dish p {
      margin: 0 0 5px;
    }
    .price {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .cart {
      margin-top: 40px;
      background-color: #fff3cd;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }
  </style>

  
</head>
<body>

<h1>Order </h1>

<div id="menu"></div>

<div class="cart">
  <h2>🛒 Cart</h2>
  <ul id="cart-list"></ul>
  <p><strong>Total:</strong> ₹<span id="total">0</span></p>
</div>

<script>
const menuItems = {
  Italian: [
    { name: "Spaghetti", price: 120, img: "images/spaghetti.jpg" },
    { name: "Pasta Alfredo", price: 200, img: "images/pasta.jpg" },
    { name: "Margherita Pizza", price: 180, img: "images/pizza.jpg" },
    { name: "risotto", price: 100, img: "images/risotto.jpg" }
  ],
  Chinese: [
    { name: "Hakka Noodles", price: 150, img: "images/chowmein.jpg" },
    { name: "Chilli Chicken", price: 170, img: "images/sweet_sour.jpg" },
    { name: "Manchurian", price: 160, img: "images/manchurian.jpg" },
    { name: "friedrice", price: 120, img: "images/friedrice.jpg" }
  ],
  Indian: [
    { name: "Butter Chicken", price: 220, img: "images/butter_chicken.jpg" },
    { name: "Paneer Tikka", price: 200, img: "images/paneer_tikka.jpg" },
    { name: "Biryani", price: 250, img: "images/biryani.jpg" },
    { name: "Dosa", price: 100, img: "images/masala_dosa.jpg" }
  ],
  American: [
    { name: "Cheeseburger", price: 190, img: "images/burger.jpg" },
    { name: "Hot Dog", price: 160, img: "images/hotdog.jpg" },
    { name: "Mac and Cheese", price: 200, img: "images/mac_cheese.jpg" },
    { name: "BBQ Ribs", price: 300, img: "images/bbq_ribs.jpg" }
  ],
   Afghani: [
    { name: "afghani_chicken", price: 190, img: "images/afghani_chicken.jpg" },
    { name: "Mantu", price: 160, img: "images/mantu.jpg" },
    { name: "Qabuli pulao", price: 200, img: "images/qabuli_pulao.jpg" },
    { name: "bolani", price: 300, img: "images/bolani.jpg" }
  ],
  European: [
    { name: "Paella", price: 260, img: "images/paella.jpg" },
    { name: "shepherd Pie.", price: 140, img: "images/shepherd_pie.jpg" },
    { name: "Goulash", price: 180, img: "images/goulash.jpg" },
    { name: "quiche", price: 120, img: "images/quiche.jpg" }
  ]
};

const cart = [];

function renderMenu() {
  const menuContainer = document.getElementById('menu');
  for (let cuisine in menuItems) {
    const category = document.createElement('div');
    category.className = 'category';

    const title = document.createElement('h2');
    title.textContent = cuisine;
    category.appendChild(title);

    const dishContainer = document.createElement('div');
    dishContainer.className = 'dishes';

    menuItems[cuisine].forEach(item => {
      const dish = document.createElement('div');
      dish.className = 'dish';

      dish.innerHTML = `
        <img src="${item.img}" alt="${item.name}">
        <h3>${item.name}</h3>
        <p class="price">₹${item.price}</p>
        <button  onclick='addToCart("${item.name}", ${item.price})' >Add to Cart</button>
      `;

      dishContainer.appendChild(dish);
    });

    category.appendChild(dishContainer);
    menuContainer.appendChild(category);
  }
}

function addToCart(name, price) {
  cart.push({ name, price });
  updateCart();
}

function updateCart() {
  const cartList = document.getElementById('cart-list');
  cartList.innerHTML = '';
  let total = 0;
  cart.forEach(item => {
    const li = document.createElement('li');
    li.textContent = `${item.name} - ₹${item.price}`;
    cartList.appendChild(li);
    total += item.price;
  });
  document.getElementById('total').textContent = total;
}

renderMenu();
</script>
</body>
</html>
