<?php
// Sample string
$sampleString = 'PHP Tutorial';

// Function to change the color of the first character of each word
function colorizeFirstCharacter($inputString) {
    $words = explode(' ', $inputString);

    foreach ($words as &$word) {
        $firstChar = mb_substr($word, 0, 1);
        $restOfWord = mb_substr($word, 1);
        $word = "<span style='color: red;'>$firstChar</span>$restOfWord";
    }

    return implode(' ', $words);
}

// Output the modified string
echo colorizeFirstCharacter($sampleString);
?>
