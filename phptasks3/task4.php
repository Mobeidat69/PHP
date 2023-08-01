<!DOCTYPE html>
<html>
<head>
    <title>First Element of Array</title>
</head>
<body>
    <h1>First Element of Array</h1>
    <?php
    // Given array
    $color = array(4 => 'white', 6 => 'green', 11 => 'red');

    // Get the first element of the array
    $firstElement = reset($color);
    ?>

    <p>First Element: <?php echo $firstElement; ?></p>
</body>
</html>
