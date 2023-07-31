<?php
// Redirect the user to the desired URL
$redirectURL = 'https://www.w3schools.com/';
header("Location: $redirectURL");
exit; // Make sure to include 'exit' or 'die' after the header() function
?>
