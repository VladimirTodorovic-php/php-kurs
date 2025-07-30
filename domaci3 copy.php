<?php 

$naslov = "Postani programer";
$stranica = ["Glavna", "O nama", "Kontakt"];
$trenutna_godina = date("Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postani progrmer kurs</title>
</head>
<body>
    <h1> <?php echo $naslov; ?> </h1>
    <a href=""> <?php echo $stranica[0]; ?> </a>
    <a href=""> <?php echo $stranica[1]; ?> </a>
    <a href=""> <?php echo $stranica[2]; ?> </a>
</body>
<footer>
    <p> Copyright © mojsajt <?php echo $trenutna_godina; ?> </p>
</footer>
</html>