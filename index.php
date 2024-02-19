<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marlon's Pizza</title>
    <style>
        /* basic reset */
        body, h1, h2, h3, p, form, fieldset, legend, input, button {
            margin: 0;
            padding: 0;
        }

        /* page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4c88e 
        }

        header {
            border: 5px solid #c52b13; 
            background-image: url("2backgroundimgpizzapizza_page-0001.jpg"); 
            background-size: cover;
            padding: 1em;
        }

        header h1 {
            color: #fff; 
           
            
        }

        main {
            text-align: center;
            padding: 1em;
        }

        /* form styling */
        form {
            background-color: #fff;
            padding: 2em;
            margin: 2em auto;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
            margin-bottom: 1em;
        }

        legend {
            font-weight: bold;
            margin-bottom: 0.5em;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ddd;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 0.5em;
        }

        button {
            padding: 0.5em 1em;
            background-color: #f44336; 
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #d32f2f; 
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .rotating-pizza {
            animation: rotation 6s infinite linear;
        }
        p{
            color: #fff;
            border: 2px #000;
            border-radius: 2px;
            padding: 10px;
        }
        
        footer {
            font-size: 0.8em;
            color: #666;
        }

    </style>
</head>
<body>
    <!-- header section -->
    <header>
        <h1>MARLON'S PIZZA</h1>
        <p>Order your favorite pizza online!</p>
    </header>

    <!-- main content section -->
    <main>
        <form action="confirm.order.php" method="post">
            <fieldset>
                <legend>Choose your pizza</legend>
                <!-- number of pizzas -->
                <label for="number-of-pizzas">Number of pizzas:</label>
                <input type="number" id="number-of-pizzas" name="number_of_pizzas" min="1" required>

                <!-- size of pizza -->
                <label for="size">Size:</label>
                <select id="size" name="size">
                    <option value="small">Small - 6 slices</option>
                    <option value="medium">Medium - 8 slices</option>
                    <option value="large">Large - 12 slices</option>
                </select>

                <!-- shape of pizza -->
                <label>Shape:</label>
                <input type="radio" id="round" name="shape" value="round" checked>
                <label for="round">Round</label>
                <input type="radio" id="square" name="shape" value="square">
                <label for="square">Square</label>

                <!-- toppings -->
                <label>Toppings:</label>
                <input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni">
                <label for="pepperoni">Pepperoni</label>
                <input type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms">
                <label for="mushrooms">Mushrooms</label>
                <input type="checkbox" id="onions" name="toppings[]" value="onions">
                <label for="onions">Onions</label>
                <!-- add more toppings as needed -->

                <!-- crust type -->
                <label for="crust">Crust:</label>
                <select id="crust" name="crust">
                    <option value="thin">Thin Crust</option>
                    <option value="deep_dish">Deep Dish</option>
                    <option value="stuffed">Stuffed Crust</option>
                </select>

                <!-- order type -->
                <label>Order Type:</label>
                <input type="radio" id="take_out" name="order_type" value="take_out" checked>
                <label for="take_out">Take Out</label>
                <input type="radio" id="delivery" name="order_type" value="delivery">
                <label for="delivery">Delivery</label>
                <input type="radio" id="eat in" name="order_type" value="eat_in">
                <label for="eat_in">Eat  In</label>
            </fieldset>

            <fieldset>
                <legend>Your details</legend>
                <!-- name -->
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <!-- email -->
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <!-- phone -->
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <!-- address -->
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </fieldset>

            <!-- pizza image with rotation animation -->
            <p>
                <img class="rotating-pizza" src="rotatinpizza.png" alt="Rotating pizza slice" width="100">
            </p>
            <hr>

            <!-- submit and reset buttons -->
            <button type="submit">Place Order</button>
            <button type="reset">Reset</button>
        </form>
    </main>

    <!-- footer section -->
    <footer>
        <p>&copy; 2024 Marlon's Pizza. All rights reserved.</p>
    </footer>
</body>
</html>