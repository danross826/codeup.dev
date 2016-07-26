
<?php
  var_dump($_GET);
  var_dump($_POST);?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/pizza.css">
        <title>pizzaform</title>
    </head>
    <body>
            <h1 class="underline1 text-indent1">Pizza Order Form</h1>
            <p class="center">Please fill out a form for each different type of pizza to be ordered:</p>
            <img src="../IMG/download (2).jpeg" id="pizzacircle">
            <br>
            <div class="center" id="top">
        <form method="GET" action="http://www.marcos.com/">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity">
            <br>
            <label for="crust">Crust</label>
            <select id="crust" name="crust">
                <option>Stuffed</option>
                <option>Thin</option>
                <option>Thick</option>
            </select>
            <br>
            <label for="size">Size</label>
            <select id="size" name="size">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
            </select>
            <p>What toppings would you like (check all that apply)?</p>
                <hr>
                <div class="topbackground1">
                <label class="font"><input type="checkbox" id="top1" name="toppings" value="pepperoni">Pepperoni</label>
                <br>
                <img src="/IMG/$_32.jpeg" class="toppingimg">
                </div>
                    <hr>
                <div class="topbackground2">
                <label class="font"><input type="checkbox" id="top2" name="toppings" value="sausage">Sausage</label>
                <br>
                <img src="/IMG/download (1).jpeg" class="toppingimg">
                </div>
                    <hr>
                <div class="topbackground1">
                <label class="font"><input type="checkbox" id="top3" name="toppings" value="pineapple">Pineapple</label>
                <br>
                <img src="/IMG/pineapplepizza.jpeg" class="toppingimg">
                </div>
                    <hr>
                <div class="topbackground2">
                <label class="font"><input type="checkbox" id="top4" name="toppings" value="mushrooms">Mushrooms</label>
                <br>
                <img src="/IMG/mushroomspizza.jpeg" class="toppingimg">
                </div>
                    <hr>
                <div class="topbackground1">
                <label class="font"><input type="checkbox" id="top5" name="toppings" value="bellpeppers">Bell Peppers</label>
                <br>
                <img src="/IMG/bellpepperpizza.jpeg" class="toppingimg">
                </div>
                    <hr>
                <div class="topbackground2">
                <label class="font"><input type="checkbox" id="top6" name="toppings" value="olives">Olives</label>
                <br>
                <img src="/IMG/olivepizza.jpeg" class="toppingimg">
                </div>
                    <hr>
                </div>
                <div class="center" id="orderinfo">
                    <h2>Order Here</h2>
                <label for="addressl1">Address Line 1</label>
                <input type="text" name="Address Line 1" id="addressl1">
                <br>
                <label for="addressl2">Address Line 2</label>
                <input type="text" name="Address Line 2" id="addressl2">
                <br>
                <label for="City">City</label>
                <input type="text" name="City" id="City">
                <br>
                <label for="state">State</label>
                <input type="text" name="state" id="state">
                <br>
                <label for="creditcard">Credit Card Number</label>
                <input type="number" name="creditcard" id="creditcard">
                <br>
                <label for="cvv">CVV Number</label>
                <input type="number" name="cvv" id="cvv">
                </div>
       </form>
    </body>
</html>