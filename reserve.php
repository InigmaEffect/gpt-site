<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // Save $email to the database or send it to your email, under the category "Reservers"
    // Redirect to the SUPER FAN page
    header("Location: superfans.html");
    exit();
}
?>