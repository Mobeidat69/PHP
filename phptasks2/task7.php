<!DOCTYPE html>
<html>
<head>
    <title>Random Password Generator</title>
</head>
<body>
    <h1>Random Password Generator</h1>
    <form method="post">
        <label for="length">Enter password length:</label>
        <input type="number" id="length" name="length" min="1" max="100" required>
        <button type="submit">Generate Password</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Given string for password generation
        $givenString = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        // Get the desired password length from the form submission
        $passwordLength = $_POST['length'];

        // Shuffle the characters of the given string
        $shuffledString = str_shuffle($givenString);

        // Extract the characters to create the random password
        $randomPassword = substr($shuffledString, 0, $passwordLength);

        // Output the generated password
        echo "<p>Generated Password: $randomPassword</p>";
    }
    ?>
</body>
</html>