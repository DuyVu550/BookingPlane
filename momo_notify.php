<?php
// Receive the MoMo payment response
$rawPostData = file_get_contents('php://input');  // Get the raw POST data from MoMo
$data = json_decode($rawPostData, true);  // Decode the JSON data sent by MoMo

// Check if the response contains a resultCode
if ($data['resultCode'] == 0) {
    // Payment was successful
    $orderId = $data['orderId'];  // Order ID from the payment
    $amount = $data['amount'];  // Amount paid
    $status = $data['resultMessage'];  // Result message

    // Process the successful payment (e.g., update the order status in the database)
    // You can also log the payment details or send an email to the user

    // Example: Update the order status in the database (replace with your own database code)
    // Assuming you have a function like updateOrderStatus($orderId, $status) to update your database
    // updateOrderStatus($orderId, 'paid');

    echo "Payment successful!";  // Response to MoMo
} else {
    // Payment failed
    echo "Payment failed: " . $data['resultMessage'];  // Show the error message
}
?>
