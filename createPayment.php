<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// MoMo API credentials from your MoMo Developer Console
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = 'Thanh toán qua MoMo';
$returnUrl = 'http://localhost:3000/ChiTietVe.php'; // URL MoMo will redirect to after payment
$notifyUrl = 'http://localhost:3000/ChiTietVe.php'; // URL for MoMo to notify the payment result
$amount = $_POST['amount']; // The amount the user wants to pay, e.g., 3.256.000 VNĐ

// Prepare the payment request data
$requestId = time(); // Unique request ID (using timestamp)
$orderId = uniqid(); // Unique order ID (using a random ID or timestamp)
$requestType = 'captureMoMoWallet'; // MoMo wallet payment

// Prepare the raw signature string
$rawSignature = "partnerCode=$partnerCode&accessKey=$accessKey&requestId=$requestId&amount=$amount&orderId=$orderId&orderInfo=$orderInfo&returnUrl=$returnUrl&notifyUrl=$notifyUrl&requestType=$requestType";

// Create the signature using your Secret Key
$signature = hash_hmac('sha256', $rawSignature, $secretKey);

// Prepare the data for MoMo API request
$data = array(
    'partnerCode' => $partnerCode,
    'accessKey' => $accessKey,
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'returnUrl' => $returnUrl,
    'notifyUrl' => $notifyUrl,
    'requestType' => $requestType,
    'signature' => $signature
);

// Send the request to MoMo's payment API using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://test-payment.momo.vn/gw_payment/transactionProcessor");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Skip SSL verification for testing

$response = curl_exec($ch);
curl_close($ch);

// Parse the MoMo API response
$responseData = json_decode($response, true);

// Return the payment URL if the request was successful
if ($responseData['resultCode'] == 0) {
    echo json_encode(['payUrl' => $responseData['payUrl']]);
} else {
    // Handle error if payment request failed
    echo json_encode(['message' => $responseData['message']]);
}
?>
