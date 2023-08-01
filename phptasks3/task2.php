<!DOCTYPE html>
<html>
<head>
    <title>Array as Unordered List</title>
</head>
<body>
    <h1>Array as Unordered List</h1>
    <?php
    // Sample array
    $colors = array('white', 'green', 'red');

    // Display the array as an unordered list
    echo '<ul>';
    foreach ($colors as $color) {
        echo '<li>' . $color . '</li>';
    }
    echo '</ul>';
    ?>
</body>
</html>
