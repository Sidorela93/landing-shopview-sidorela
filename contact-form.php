<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $consent = isset($_POST['consent']) ? 'Yes' : 'No';

    echo "<div style='padding:20px;background:#dff0d8;color:#3c763d;border-radius:10px;'>
        <h4>Thank you for your submission!</h4>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>
        <p><strong>Consent:</strong> $consent</p>
        <a href='index.php' style='color:#337ab7;'>Go back</a>
    </div>";

    exit;
}
?>
