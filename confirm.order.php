<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number_of_pizzas = htmlspecialchars($_POST['number_of_pizzas']);
    $size = htmlspecialchars($_POST['size']);
    $shape = htmlspecialchars($_POST['shape']);
    $crust = htmlspecialchars($_POST['crust']);
    $order_type = htmlspecialchars($_POST['order_type']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // toppings
    $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];
    $toppings_list = implode(", ", $toppings);

    // name or email
    if (empty($name) || empty($email)) {
        die("Please fill in all required fields.");
    }
} else {
    
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
    
        body {
            font-family: Arial, sans-serif; 
            background-color: #f4c88e;
            margin: 0;
            padding: 0;

        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #c52b13;
            text-align: center;
            
        }
    
        p {
            text-align: center;
            font-size: 0.8em;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank you for your order, <?php echo $name; ?>!</h1>
        <p>Your order details:</p>
        <ul>
            <li>Number of pizzas: <?php echo $number_of_pizzas; ?></li>
            <li>Size: <?php echo $size; ?></li>
            <li>Shape: <?php echo $shape; ?></li>
            <li>Crust: <?php echo $crust; ?></li>
            <li>Toppings: <?php echo $toppings_list; ?></li>
            <li>Order Type: <?php echo $order_type; ?></li>
        </ul>
        <hr>

        <p>We will contact you at <?php echo $email; ?> or <?php echo $phone; ?> if we need any more information.</p>
        <p>Your pizza will be delivered to: <?php echo $address; ?></p>
        <hr>

        <p>
        
        <img class="rotating-pizza" src="rotatinpizza.png" alt="Rotating pizza slice" width="100">
        </p>
         
    </div>
</body>
</html>
