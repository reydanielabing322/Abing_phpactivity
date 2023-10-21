<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeomemetricSequence</title>
</head>
<body>

<form method="POST" action="">
    <label id="number">Enter number of terms: </label>
    <input type="number" id="number" name="input" />

    <input type="submit" value="Submit" />
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];

    function geometricSequence($input) {
        $currentValue = 1;
        $sequence = [$currentValue];
        for ($i = 0; $i < $input-1; $i++) {
            $sequence[] = $currentValue = $currentValue * 2;
        }

        return $sequence;
    }

    
    $result = geometricSequence($input);
    echo "Generated Geometric Sequence: " . implode(", ", $result);
}
?>

</body>
</html>