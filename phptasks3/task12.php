<!DOCTYPE html>
<html>
<head>
    <title>Numbers Divisible by 4</title>
</head>
<body>
    <h1>Numbers Divisible by 4</h1>
    <?php
    // Display numbers between 200 and 250 that are divisible by 4
    for ($num = 200; $num <= 5000; $num++) {
        if ($num % 4 == 0) {
            echo "$num, ";
        }
        
    }
    ?>
</body>
</html>