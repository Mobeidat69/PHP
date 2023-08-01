<!DOCTYPE html>
<html>
<head>
    <title>Merge Arrays</title>
</head>
<body>
    <h1>Merge Arrays</h1>
    <?php
    // Sample input arrays
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

    // Merge the arrays using array_merge()
    $mergedArray = array_merge($array1, $array2);
    ?>

    <pre>Merged Array: <?php print_r($mergedArray); ?></pre>
</body>
</html>




