<!DOCTYPE html>
<html>
<head>
    <title>Simple Name Form</title>
</head>
<body>
    <form method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
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
