<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Příběh</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form method="post">
    <label >Jméno hlavní postavy</label>
    <input type="text" name="postava" placeholder="Jindřich Štorkle">

    <label >Profese hlavní postavy</label>
    <input type="text" name="profese" placeholder="Potulný pěvec">

    <label >Odkud hlavní postava pochází? </label>
    <input type="text" name="puvod" placeholder="Zelená louka">

    <label >Jaký byl důvod cesty? </label>
    <input type="text" name="duvod" placeholder="Láska">

    <input type="submit" name="submit" value="Vygenerovat Příběh">
</form>

<section>
<?php
    include 'inc.pribeh.php'
?>
</section>
    
</body>
</html>