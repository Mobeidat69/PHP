<!DOCTYPE html>
<html>
<head>
    <title>Remove Zeroes from Number</title>
</head>
<body>
    <h1>Remove Zeroes from Number</h1>

    <?php
    // Given number as a string with leading and trailing zeroes
    $numberAsString = "00001234.5600";

    // Remove leading and trailing zeroes by casting to a float
    $numberAsFloat = (float) $numberAsString;
    ?>

    <p>Original Number: <?php echo $numberAsString; ?></p>
    <p>Number without zeroes: <?php echo $numberAsFloat; ?></p>
</body>
</html>
Save the above code in a file with a .php extension, for example, remove_zeroes.php, and place it in a directory accessible by your web server.

When you access the remove_zeroes.php file through a web browser, it will display the original number as well as the number without zeroes. The output will be:

yaml
Copy code
Original Number: 00001234.5600
Number without zeroes: 1234.56
By casting the number to a float using (float), we automatically remove any leading and trailing zeroes, resulting in the number without zeroes being displayed on the page.





