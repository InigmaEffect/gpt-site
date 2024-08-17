<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactEmail = $_POST['contact-email'];
    // Save $contactEmail to the database or send it to your email, under the category "Contactors"
    // Redirect to a thank you page or back to the contact page
    header("Location: thankyou.html");
    exit();
}
?>
