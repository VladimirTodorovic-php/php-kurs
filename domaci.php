<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="domaci2.php">
        <input type="text" name="cena_proizvoda" placeholder="Unesite cenu proizvoda">
        <select name="vrsta_kupovine">
            <option>Hrana</option>
            <option>Oprema za racunare</option>
        </select>
        <input type="checkbox" name="provera_poreza">
        <label for="html">Izracunaj porez</label>
        <button>Izracunaj cenu</button>
    </form>
</body>
</html>