<!DOCTYPE html>
<html>
<head>
    <title>Insert Item in Array</title>
</head>
<body>
    <h1>Insert Item in Array</h1>
    <?php
    // Given array
    $fruits = array('apple', 'banana', 'orange', 'grape', 'kiwi');

    // New item to insert
    $newFruit = 'mango';

    // Position to insert the new item (in this case, after 'banana')
    $insertPosition = 2;

    // Insert the new item at the specified position
    array_splice($fruits, $insertPosition, 0, $newFruit);
    ?>

    <p>Original Array: <?php     
     echo "<pre>";
 print_r($fruits); 
 ?>
 </p>
</body>
</html>
