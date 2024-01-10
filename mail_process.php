<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "support@stallionkartingandeffique.com";
    $subject = "New Message from Website";
    $email_message = "Name: $name\nEmail: $email\nPhone Number: $phone\n\nMessage: $message";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        $_SESSION['notification'] = '<div class="alert alert-success alert-dismissible" role="alert">
                            Thank you! Your message has been sent successfully.
                        </div>';
    } else {
        $_SESSION['notification'] = '<div class="alert alert-danger alert-dismissible" role="alert">
                            Sorry, there was an error sending your message.
                        </div>';
    }

    header("Location: ReachOut1.php");
    exit();
}
?>
