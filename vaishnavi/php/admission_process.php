'''<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collecting data from the form
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

    // For now, just display the form data. In real-world usage, you could insert it into a database.
    echo "<h2>Admission Details:</h2>";
    echo "<p><strong>Full Name:</strong> $fullName</p>";
    echo "<p><strong>Email Address:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    
    // You could also add functionality here to store the data in a database or send an email.
}
?>*
