<?php
    require "./variables.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to PHP</title>
</head>
<body>
    <?php
        echo "¡Hola, mundo!";
        echo "<br>";
        //echo "&lt;br>"; html entities > if I wanted to display the br tag on the browser
        echo $mySentence;
        echo "<br>";
        var_dump($mySentence);
        //it returns the value of the variable, its type of data and amount of characters; it's useful for debugging
        echo "<br>";
        var_dump($myNumber);
        echo "<br>";
        var_dump($myName);
    ?>
    <p>My name is <?php
    echo $myName . " and my favourite number is $myNumber </p>";
?>
</body>
</html>