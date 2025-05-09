<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    
    echo "<h2>Form submitted successfully!</h2>";
    echo "<p>Name: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
} else {
    echo "<h2>Invalid access. Form not submitted properly.</h2>";
}
?>
