<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        p {
            font-size: 40px;
            font-weight: bolder;
            text-align: center;
        }

        .container {
            border: 1px solid black;
            padding: 20px;
            width: 80%;
            margin: auto;
           
        }

        .receipt-details {
            font-weight: bold;
            font-style: italic;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .date-time {
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="container">
    <p>RECEIPT</p>
        <div class="receipt-details">
            <?php
            $prices = array(
                "Burger" => 50,
                "Fries" => 75,
                "Steak" => 150
            );

            $order = $_POST['order'];
            $quantity = $_POST['quantity'];
            $cash = $_POST['cash'];

            $totalPrice = $prices[$order] * $quantity;
            $change = $cash - $totalPrice;

            echo "Total Price: " . $totalPrice . "<br>";
            echo "You Paid: " . $cash . "<br>";
            echo "Change: " . $change . "<br>";

            
            date_default_timezone_set('Asia/Manila');
            echo "<span class='date-time'>" . date("m/d/y h:ia") . "</span>";
            ?>
        </div>
    </div>
</body>
</html>
