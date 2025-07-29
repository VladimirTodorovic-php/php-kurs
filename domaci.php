<?php 

$title = "Postani programer";
$stranice = ["glavna", "o nama", "Kontant"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1> <?php echo $title; ?> </h1>
    <a href=""> <?php echo $stranice[0] ?> </a>
    <a href=""> <?php echo $stranice[1] ?></a>
    <a href=""> <?php echo $stranice[2] ?></a>
</body>
</html>