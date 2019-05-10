<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>

<h1>Calculator</h1>

<?php

    $a = $_GET["a"];
    $b = $_GET["b"];
    $operation = $_GET["operation"];
    

    echo "<br/>A er  " . $a;
    echo "<br/>B er  " . $b;
    
    if ($operation == "plus") {

    echo "<br/>Resultatet er  ", $a + $b;

    }

?>

</body>
</html>