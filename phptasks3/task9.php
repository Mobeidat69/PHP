<!DOCTYPE html>
<html>
<head>
    <title>Convert to Lowercase</title>
</head>
<body>
    <h1>Convert to Lowercase</h1>
    <?php
    // Sample input array
    $colors = array("RED", "BLUE", "WHITE", "YELLOW");

    // Convert the strings to lowercase using array_map()
    $lowercaseColors = array_map('strtolower', $colors);

    // Display the lowercase array
    echo '<pre>';
    print_r($lowercaseColors);
    echo '</pre>';
    ?>
</body>
</html>
