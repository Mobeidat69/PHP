<!DOCTYPE html>
<html>
<head>
    <title>Split Numeric String to Date Format</title>
</head>
<body>
    <h1>Split Numeric String to Date Format</h1>
    <form method="post">
        <label for="numericString">Enter a numeric string (YYYYMMDD):</label>
        <input type="text" id="numericString" name="numericString" required>
        <button type="submit">Submit</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the numeric string from the form submission
        $numericString = $_POST['numericString'];

        // Check if the input string has 8 characters (YYYYMMDD)
        if (strlen($numericString) === 8) {
            // Extract year, month, and day from the numeric string
            $year = substr($numericString, 0, 4);
            $month = substr($numericString, 4, 2);
            $day = substr($numericString, 6, 2);

            // Create a date object using the extracted values
            $date = DateTime::createFromFormat('Y-m-d', "$year-$month-$day");

            if ($date) {
                // Format the date as desired (e.g., 'd-m-Y', 'Y/m/d', etc.)
                $dateFormatted = $date->format('d-m-Y');

                // Output the formatted date
                echo "<p>Formatted Date: $dateFormatted</p>";
            } else {
                echo "<p>Invalid date!</p>";
            }
        } else {
            echo "<p>Invalid input! The numeric string should have 8 characters (YYYYMMDD).</p>";
        }
    }
    ?>
</body>
</html>