<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <select name="operation">
            <option value="uppercase">Convert to UPPERCASE</option>
            <option value="lowercase">Convert to lowercase</option>
            <option value="capitalize">Make first letter Uppercase</option>
            <option value="titlecase">Capitalize Each Word's First Letter</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputString = $_POST['inputString'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'uppercase':
                $result = strtoupper($inputString);
                break;
            case 'lowercase':
                $result = strtolower($inputString);
                break;
            case 'capitalize':
                $result = ucfirst($inputString);
                break;
            case 'titlecase':
                $result = ucwords($inputString);
                break;
            default:
                $result = "Invalid operation";
                break;
        }

        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
