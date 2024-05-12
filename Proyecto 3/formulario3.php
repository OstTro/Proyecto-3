<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action="tratamiento-datos.php" method="post">
        <input type="radio" name="figura"  value="circulo">Circulo<br/>
        <input type="radio" name="figura"  value="cuadrado">Cuadrado<br/>
        <input type="radio" name="figura"  value="triangulo">Triangulo<br/>
        <br/>
        <label for="radio">Radio</label>
        <input type="number" id="radio" name="rdaio" />
        <br/>
        <label for="lado">Lado</label>
        <input type="number" id="lado" name="rdaio" />
        <br/>
        <label for="base">Base</label>
        <input type="number" id="base" name="rdaio" />
        <br/>
        <label for="altura">Altura</label>
        <input type="number" id="altura" name="rdaio" />
        <br/>
        <input type="submit">


    </from>

    <?php

    ?>

</body>
</html>