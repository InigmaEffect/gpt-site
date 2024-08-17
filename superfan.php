<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $superfanEmail = $_POST['superfan-email'];
    // Save $superfanEmail to the database or send it to your email, under the category "Super Fans"
    // Process the $1 payment (integration with a payment gateway like PayPal required)
    // Redirect to a thank you page or confirmation page
    header("Location: thankyou.html");
    exit();
}
?>