<?php

$cena = $_GET["cena_proizvoda"];
$vrsta_proizvoda = $_GET["vrsta_kupovine"];

if($vrsta_proizvoda == "Hrana") 
{    
    $cena = $cena + 50;
}
else if($vrsta_proizvoda == "Oprema za racunare") 
{
    $cena = $cena + 250;
}
if (isset($_GET["provera_poreza"])) {
    $cena = ($cena*0.1) + $cena; 
}

echo $cena;
