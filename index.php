<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        table {
            width: 40%;
            height: 180px;
            font-size: 18px;
        }
        th, td {
            border: 1.5px solid black;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Borgir</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Stick</td>
            <td>150</td>
        </tr>
    </table>
    <form action="receipt.php" method="POST">
    <p>Select an order:
        <select name="order">
            <option value="Burger">Borgir</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Stick</option>
        </select>
    </p>
        <p>Quantity: <input type="number" name="quantity"></p>
        <p>Cash: <input type="number" name="cash"></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>