<!DOCTYPE html>
<html>
<head>
    <title>Check Word in Sentence</title>
</head>
<body>
    <h1>Check Word in Sentence</h1>
    <form method="post">
        <label for="sentence">Enter a sentence:</label>
        <input type="text" id="sentence" name="sentence" required>
        <br>
        <label for="word">Enter a word to check:</label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Check</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the sentence and word from the form submission
        $sentence = $_POST['sentence'];
        $word = $_POST['word'];

        // Convert both the sentence and word to lowercase to perform a case-insensitive search
        $sentenceLower = strtolower($sentence);
        $wordLower = strtolower($word);

        // Check if the word exists in the sentence
        if (strpos($sentenceLower, $wordLower) !== false) {
            echo "<p>Word Found!</p>";
        } else {
            echo "<p>Word Not Found!</p>";
        }
    }
    ?>
</body>
</html>
