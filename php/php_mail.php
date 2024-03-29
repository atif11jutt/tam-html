<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $questionsComments = isset($_POST["questionsComments"]) ? "Yes" : "No";
    $yardSign = isset($_POST["yardSign"]) ? "Yes" : "No";
    $volunteer = isset($_POST["volunteer"]) ? "Yes" : "No";

    // Compose email message
    $to = "brian@votebriantam.com";
    $subject = "New Newsletter Subscription";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Questions/Comments: $questionsComments\n";
    $message .= "Yard Sign: $yardSign\n";
    $message .= "Volunteer: $volunteer\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "<p>Thank you for subscribing!</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>
