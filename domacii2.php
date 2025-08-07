<?php 

$ime = isset($_POST["korisnik"]);
$duzinaKorisnika = strlen($_POST["korisnik"]);
$razmak = trim($_POST["korisnik"]);

$korisnici = ["Toma", "Petar", "Marko"];
$korisnici = array_map('strtolower', $korisnici);
$velikaSlova = strtolower($_POST["korisnik"]);

if(!$ime) 
{
    die("Morate uneti ime korisnika");
} 
if($duzinaKorisnika < 3) 
{
    die("Ime ne sme biti manje od 3 karaktera");
}
if(!in_array($velikaSlova, $korisnici))
{
    die("Korisnik nije pronadjen u bazi");
}
// if(in_array("Toma", $korisnici))
// {
//     echo("Dobrodosao Tomo");
// }
// else {
//     die("korisnik nije pronadjen u bazi");
// }
// if(in_array("Petar", $korisnici)) 
// {
//     echo("Dobrodosao Petre");
// }
// else {
//     die("korisnik nije pronadjen u bazi");
// }
// if(in_array("Marko", $korisnici)) 
// {
//     echo("Dobrodosao marko");
// }
// else {
//     die("korisnik nije pronadjen u bazi");
// }


echo "Dobrodosao korisnice";
