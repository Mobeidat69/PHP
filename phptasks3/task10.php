<!DOCTYPE html>
<html>
<head>
    <title>Convert to Uppercase</title>
</head>
<body>
    <h1>Convert to Uppercase</h1>
    <?php
    // Sample input array
    $colors = array("red", "blue", "white", "yellow");

    // Convert the strings to uppercase using array_map()
    $uppercaseColors = array_map('strtoupper', $colors);

    // Display the uppercase array
    echo '<pre>';
    print_r($uppercaseColors);
    echo '</pre>';
    ?>
</body>
</html>
