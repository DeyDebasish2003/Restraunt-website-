<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        p{
            font-family: cursive;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {
            font-family: cursive;
            font-size: 50px;
            text-align: center;
            margin: 30px 0;
        }
        body {
            background-color: #faebd7;
            font-family: Arial, sans-serif;
        }
        .content {
            width: 85%;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }
        .content .left, .content .right {
            flex: 1;
        }
        .content .left img {
            width: 100%;
            transition: transform 0.5s ease;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .content .left img:hover {
            transform: scale(1.05);
        }
        .content .right p {
            font-size: 16px;
            text-align: justify;
            padding: 10px;
            background-color: #ffac40;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>



</head>
<body>


    <h1 style="color: brown;"> MENU</h1>
    <br>

    <h1 id="Italian">Italian Dishes</h1>
    <div class="content">
        <div class="left"><img src="images/spaghetti.jpg" alt="Spaghetti"></div>
        <div class="right"><p>Classic Spaghetti Bolognese with rich meat sauce and parmesan.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Margherita Pizza - A timeless Italian pizza with tomato, mozzarella, and basil.</p></div>
        <div class="left"><img src="images/margherita.jpg" alt="Margherita Pizza"></div>
    </div>
    <div class="content">
        <div class="left"><img src="images/lasagna.jpg" alt="Lasagna"></div>
        <div class="right"><p>Layered Lasagna with béchamel sauce and minced meat filling.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Risotto Alla Milanese - Creamy rice dish flavored with saffron and parmesan.</p></div>
        <div class="left"><img src="images/risotto.jpg" alt="Risotto"></div>
    </div>

    <h1 id="Chinese" >Chinese Dishes</h1>
    <div class="content">
        <div class="left"><img src="images/chowmein.jpg" alt="Chow Mein"></div>
        <div class="right"><p>Stir-fried Chow Mein noodles with vegetables and soy sauce.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Sweet and Sour Chicken - Crispy chicken with tangy sweet and sour sauce.</p></div>
        <div class="left"><img src="images/sweet_sour.jpg" alt="Sweet and Sour Chicken"></div>
    </div>
    <div class="content">
        <div class="left"><img src="images/friedrice.jpg" alt="Fried Rice"></div>
        <div class="right"><p>Egg Fried Rice loaded with vegetables and scrambled eggs.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Manchurian Balls - Veg dumplings in spicy Chinese sauce.</p></div>
        <div class="left"><img src="images/manchurian.jpg" alt="Manchurian"></div>
    </div>

    <h1 id="Afghani">Afghani Dishes</h1>
    <div class="content">
        <div class="left"><img src="images/afghani_chicken.jpg" alt="Afghani Chicken"></div>
        <div class="right"><p>Afghani Chicken marinated in yogurt and spices, grilled to perfection.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Mantu - Afghan dumplings stuffed with meat and served with tomato sauce and yogurt.</p></div>
        <div class="left"><img src="images/mantu.jpg" alt="Mantu"></div>
    </div>
    <div class="content">
        <div class="left"><img src="images/qabuli_pulao.jpg" alt="Qabuli Pulao"></div>
        <div class="right"><p>Qabuli Pulao - Fragrant rice dish with carrots, raisins, and lamb.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Bolani - Pan-fried flatbread stuffed with mashed potatoes and green onions.</p></div>
        <div class="left"><img src="images/bolani.jpg" alt="Bolani"></div>
    </div>

    <h1 id="Indian">Indian Dishes</h1>
    <div class="content">
        <div class="left"><img src="images/butter_chicken.jpg" alt="Butter Chicken"></div>
        <div class="right"><p>Butter Chicken - Creamy tomato curry with tender chicken chunks.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Paneer Tikka - Grilled cubes of paneer marinated in spicy masala.</p></div>
        <div class="left"><img src="images/paneer_tikka.jpg" alt="Paneer Tikka"></div>
    </div>
    <div class="content">
        <div class="left"><img src="images/biryani.jpg" alt="Biryani"></div>
        <div class="right"><p>Hyderabadi Biryani - Aromatic basmati rice with spiced chicken or mutton.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Masala Dosa - Crispy South Indian crepe filled with spicy mashed potatoes.</p></div>
        <div class="left"><img src="images/masala_dosa.jpg" alt="Masala Dosa"></div>
    </div>

    <h1 id="American">American Dishes</h1>
    <div class="content">
        <div class="left"><img src="images/burger.jpg" alt="Burger"></div>
        <div class="right"><p>Classic Beef Burger with lettuce, tomato, cheese, and special sauce.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>BBQ Ribs - Slow-cooked pork ribs with smoky barbecue glaze.</p></div>
        <div class="left"><img src="images/bbq_ribs.jpg" alt="BBQ Ribs"></div>
    </div>
    <div class="content">
        <div class="left"><img src="images/hotdog.jpg" alt="Hotdog"></div>
        <div class="right"><p>New York Hotdog with mustard, onions, and sauerkraut.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Mac and Cheese - Creamy, cheesy comfort food classic.</p></div>
        <div class="left"><img src="images/mac_cheese.jpg" alt="Mac and Cheese"></div>
    </div>

    <h1 id="European">European Dishes</h1>
    <div class="content">
        <div class="left"><img src="images/shepherd_pie.jpg" alt="Shepherd's Pie"></div>
        <div class="right"><p>Shepherd's Pie - Ground meat and vegetables topped with mashed potatoes.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Goulash - Hungarian stew of beef and vegetables with paprika.</p></div>
        <div class="left"><img src="images/goulash.jpg" alt="Goulash"></div>
    </div>
    <div class="content">
        <div class="left"><img src="images/paella.jpg" alt="Paella"></div>
        <div class="right"><p>Paella - Spanish rice dish with seafood, chicken, and saffron.</p></div>
    </div>
    <div class="content">
        <div class="right"><p>Quiche Lorraine - Savory French pie with eggs, cheese, and bacon.</p></div>
        <div class="left"><img src="images/quiche.jpg" alt="Quiche Lorraine"></div>
    </div>

</body>
</html>

