<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowels of Name</title>
</head>
<body>
    <?php


$string = "Rey Daniel L. Abing";


$vowels = array('a', 'e', 'i', 'o', 'u');


$len = strlen($string);

$num = 0;


for ($i = 0; $i < $len; $i++) {
    if (in_array(strtolower($string[$i]), $vowels)) {
        $num = $num + 1;
    }
}echo "There are <strong>" . $num . " vowels</strong> in the name: <strong>" . $string . "</strong>";
?>

</body>
</html>