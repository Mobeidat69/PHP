<!DOCTYPE html>
<html>
<head>
    <title>Generated Paragraph</title>
</head>
<body>
    <h1>Generated Paragraph</h1>
    <?php
    // Array of colors
    $colors = array('red', 'green', 'white');

    // Paragraph template with placeholders for colors
    $paragraphTemplate = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {color1} carpet, the {color2} lawn, the {color3} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

    // Replace placeholders with colors
    $generatedParagraph = str_replace(array('{color1}', '{color2}', '{color3}'), $colors, $paragraphTemplate);
    ?>

    <p><?php echo $generatedParagraph; ?></p>
</body>
</html>



