<!DOCTYPE html>
<html>
<head>
    <title>Display Name</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the user's name from the form submission
        $name = isset($_POST['name']) ? $_POST['name'] : '';

        // Display the name using PHP echo
        echo "<h1>Hello, $name!</h1>";
    }
    ?>
</body>
</html>
