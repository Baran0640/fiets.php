<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include("Fiets.php");
     $fiets = new Fiets(2,"cortina","zwart");
     echo '<h1>'.$fiets->getMerk().'</h1>';

    include("brommer.php");
    $brommer = new Brommer("zip","type 4","metallic white","laag doorzichtig windscherm");
    echo '<h1>'.$brommer->getModel()." ".$brommer->getUitvoering().'</h1>';
    $brommer->setImage("oranje.png");
    echo "<br />";
    echo "<img src='".$brommer->getImage()."' alt='oranje brommer'>";
    ?>
</body>
</html>

