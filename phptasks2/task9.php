<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <h1>Insert String and Get First Word</h1>

    <?php
    // Original string
    $originalString = 'The brown fox';

    // String to insert
    $insertString = 'quick';

    // Position to insert the string (in this case, after 'The')
    $insertPosition = 4;

    // Insert the string at the specified position
    $newString = substr_replace($originalString, $insertString . ' ', $insertPosition, 0);

    // Split the sentence into an array of words
    $words = explode(' ', $newString);

    // Get the first word from the array
    $firstWord = $words[0];
    ?>

    <p>Original String: '<?php echo $originalString; ?>'</p>
    <p>Inserted String: '<?php echo $insertString; ?>'</p>
    <p>Expected Output after Insertion: '<?php echo $newString; ?>'</p>
    <p>Expected Output for First Word: '<?php echo $firstWord; ?>'</p>
</body>
</html>