<!DOCTYPE html>
<html>
<head>
    <title>Temperature Analysis</title>
</head>
<body>
    <h1>Temperature Analysis</h1>
    <?php
    // Sample input temperatures
    $temperatures = array(
        78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73,
        68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73, 90, 85, 75, 82, 95
    );

    // Calculate the average temperature
    $averageTemperature = array_sum($temperatures) / count($temperatures);

    // Sort the temperatures in ascending order
    sort($temperatures);

    // Get the five lowest temperatures
    $lowestTemperatures = array_slice($temperatures, 0, 5);

    // Get the five highest temperatures
    $highestTemperatures = array_slice($temperatures, -5, 5);

    ?>

    <p>Average Temperature: <?php echo $averageTemperature; ?></p>
    <p>Five Lowest Temperatures: <?php echo implode(', ', $lowestTemperatures); ?></p>
    <p>Five Highest Temperatures: <?php echo implode(', ', $highestTemperatures); ?></p>
</body>
</html>
