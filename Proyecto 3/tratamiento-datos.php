<?php

    session_start();
    $figura = $_POST['figura'];

    $resultado = 0;
    switch($figura) {
        case 'circulo':
            $rdaio = $_POST['radio'];
            $rresultado = ($rdaio ** 2)*M_PI ;

            break;

        case 'cuadrado':
            $lado = $_POST['lado'];
            $resultado = $lado * $lado;

            break;

        case 'triangulo':
            $altura = $_POST['altura'];
            $base = $_POST['base'];
            $resultado = ($base * $altura) / 2;

            break;


    }

    $_SESSION['resultado'] = $resultado;

    header("Location: formulario3.php");
    

?>