<!DOCTYPE html>
<html>
<head>
    <title>Shortest and Longest String</title>
</head>
<body>
    <h1>Shortest and Longest String</h1>
    <?php
    // Sample input array
    $strings = array("apple", "banana", "orange", "kiwi", "grapefruit");

    // Initialize variables for shortest and longest strings
    $shortestString = "";
    $shortestLength = PHP_INT_MAX;
    $longestString = "";
    $longestLength = 0;

    // Loop through the array to find shortest and longest strings
    foreach ($strings as $string) {
        $length = strlen($string);
        if ($length < $shortestLength) {
            $shortestLength = $length;
            $shortestString = $string;
        }
        if ($length > $longestLength) {
            $longestLength = $length;
            $longestString = $string;
        }
    }

    // Display the results
    echo "Shortest string: $shortestString (Length: $shortestLength) <br>";
    echo "Longest string: $longestString (Length: $longestLength)";
    ?>
</body>
</html>
