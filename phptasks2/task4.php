<!DOCTYPE html>
<html>
<head>
    <title>Extract File Name from URL</title>
</head>
<body>
    <h1>Extract File Name from URL</h1>
    <form method="post">
        <label for="url">Enter a URL:</label>
        <input type="text" id="url" name="url" required>
        <button type="submit">Extract</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the URL from the form submission
        $url = $_POST['url'];

        // Extract the file name from the URL
        $fileName = basename($url);

        // Output the file name
        echo "<p>File Name: $fileName</p>";
    }
    ?>
</body>
</html>