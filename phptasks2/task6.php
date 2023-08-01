<!DOCTYPE html>
<html>
<head>
    <title>Last Three Characters</title>
</head>
<body>
    <h1>Last Three Characters</h1>
    <form method="post">
        <label for="string">Enter a string:</label>
        <input type="text" id="string" name="string" required>
        <button type="submit">Get Last Three Characters</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the string from the form submission
        $string = $_POST['string'];

        // Get the last three characters from the string
        $lastThreeCharacters = substr($string, -3);

        // Output the result
        echo "<p>Last three characters: $lastThreeCharacters</p>";
    }
    ?>
</body>
</html>