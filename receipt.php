<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_price = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $total_price = $order_price * $quantity;
    $change = $cash - $total_price;

    if ($change >= 0) {
        // Receipt Screen
        echo "<h2>Receipt</h2>";
        echo "<p>Total Price: " . number_format($total_price, 2) . "</p>";
        echo "<p>You Paid: " . number_format($cash, 2) . "</p>";
        echo "<p>CHANGE: " . number_format($change, 2) . "</p>";

        date_default_timezone_set('Asia/Manila');
        $current_date = date('M-d-y');
        $current_time = date('h:i:s');

        echo "<p>Date: " . $current_date . "</p>";
        echo "<p>Time: " . $current_time . "</p>";
    } else {
        // Not Enough Balance Screen
        echo "<h2>Sorry, not enough balance</h2>";
        echo "<p>Total Price: " . number_format($total_price, 2) . "</p>";
        echo "<p>You Paid: " . number_format($cash, 2) . "</p>";
    }
}
?>
