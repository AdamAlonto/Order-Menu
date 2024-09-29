<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Order Menu</title>
</head>
<body>

    <h2>Not So Legal Medicine Menu</h2>
    <form action="receipt.php" method="POST">
        <table border="1">
            <tr>
                <th>Order </th>
                <th>Amount </th>
            </tr>
            <tr>
                <td>Marijuana </td>
                <td>₱500 </td>
            </tr>
            <tr>
                <td>Erythroxylum coca </td>
                <td>₱5,000 </td>
            </tr>
            <tr>
                <td>Diacetylmorphine </td>
                <td>₱10,000 </td>
            </tr>
            <tr>
                <td>Methamphetamine </td>
                <td>₱7,000 </td>
            </tr>
        </table>

        <br>

        <label for="order">Select an order:</label>
        <select name="order">
            <option value="500">Marijuana - ₱500</option>
            <option value="5,000">Erythroxylum coca - ₱5,000</option>
            <option value="10,000">Diacetylmorphine - ₱10,000</option>
            <option value="7,000">Methamphetamine - ₱7,000</option>
        </select>
        <br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="1" min="1">
        <br><br>

        <label for="cash">Cash:</label>
        <input type="number" name="cash" min="0">
        <br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
