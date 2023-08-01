<!DOCTYPE html>
<html>
<head>
    <title>Find Lowest Non-Zero Integer</title>
</head>
<body>
    <h1>Find Lowest Non-Zero Integer</h1>
    <?php
    // Sample input array
    $array1 = array(2, 0, 10, 12, 6, -7, -9);

    // Initialize the lowest variable with a large number
    $lowest = PHP_INT_MAX;

    // Find the lowest integer that is not 0
    foreach ($array1 as $num) {
        if ($num != 0 && $num < $lowest) {
            $lowest = $num;
        }
    }

    // Display the result
    echo "The lowest integer that is not 0 is: $lowest";
    ?>
</body>
</html>
