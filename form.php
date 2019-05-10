<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>

<h1>Form</h1>

<form action="/form.php" method="POST">
    Navn: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php

    $name = $_POST['name'];

    if ($name != "") {

    echo "<br/>Navnet er " . $name;

    setcookie("name", $name);

    }

?>

</body>
</html>