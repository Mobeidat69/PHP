<!DOCTYPE html>
<html>
<head>
    <title>Sorted Cities</title>
</head>
<body>
    <h1>Sorted Cities by Capital</h1>
    <?php
    // Cities array with mapping (associative array)
    $cities = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid"
    );

    // Sort the array by the capital (values) using mapping approach
    asort($cities);
    ?>

    <ul>
        <?php
        foreach ($cities as $country => $capital) {
            echo "<li>$capital - $country</li>";
        }
        ?>
    </ul>
</body>
</html>
