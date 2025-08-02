<?php 

$ime = "AdmiNistrator";
$lozinka = "mojaSifraJeSigurna";



if(strtolower($ime) == "administrator") {
    if($lozinka == "mojaSifraJeSigurna") {
        echo "Dobrodosao administratore";
    }
    else {
        echo "pogresili ste lozinku";
    }
}
else {
    echo "Pogresili ste korisnicko ime";
}





?>