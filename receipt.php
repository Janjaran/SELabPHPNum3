<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<style>
p {
    font-size: 40px;
    font-weight: bolder;
    text-align: center;
}

.receipt-details {
    font-weight: bold;
    font-style: italic;
    font-size: 32px;
    margin-bottom: 20px;
}

</style>
<body>
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
    echo date("m/d/y h:ia");
    ?>
    </div>
</body>
</html>