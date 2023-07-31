<!DOCTYPE html>
<html>
<head>
    <title>Extract Username from Email Address</title>
</head>
<body>
    <h1>Extract Username from Email Address</h1>
    <form method="post">
        <label for="email">Enter an email address:</label>
        <input type="text" id="email" name="email" required>
        <button type="submit">Extract</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the email address from the form submission
        $email = $_POST['email'];

        // Extract the username from the email address
        $username = strstr($email, '@', true);

        // Output the username
        echo "<p>Username: $username</p>";
    }
    ?>
</body>
</html>