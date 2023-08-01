<!DOCTYPE html>
<html>
<head>
    <title>Sort Associative Array by Keys</title>
</head>
<body>
    <h1>Sort Associative Array by Keys in Ascending Order</h1>
    <?php
    // Given associative array
    $fruits = array(
        'apple' => 5,
        'banana' => 3,
        'orange' => 8,
        'grape' => 2,
        'kiwi' => 4
    );

    // Sort the array by keys in ascending order
    ksort($fruits);
    ?>

    <pre>Sorted Array: <?php print_r($fruits); ?></pre>
</body>
</html>
