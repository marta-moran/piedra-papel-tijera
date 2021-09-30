<?php

function partida($jugador1, $jugador2)
{
    switch ($jugador1) {
        case 1:
            echo "<span>&#x1F91C;</span>";
            break;
        case 2:
            echo "<span>&#x1F596;</span>";
            break;
        case 3:
            echo "<span>&#x1F91A;</span>";
            break;
    }
    switch ($jugador2) {
        case 1:
            echo "<span>&#x1F91B;</span>";
            break;
        case 2:
            echo "<span>&#x1F596;</span>";
            break;
        case 3:
            echo "<span>&#x1F91A;</span>";
            break;
    }
}

//piedra 1 papel 2 tijera 3
function sacarGanador($jugador1, $jugador2)
{
    if ($jugador1 == $jugador2) {
        echo "<br>¡Empate!";
    } else if ($jugador1 == 3 && $jugador2 == 1 || $jugador1 == 2 && $jugador2 == 3 || $jugador1 == 1 && $jugador2 == 2) {
        echo "<br>¡Gana el jugador 1!";
    } else {
        echo "<br>¡Gana el jugador 2!";
    }
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <style>
        main>div>span {
            font-size: 100px;
        }
    </style>
</head>
<main>

    <body>
        <h1>¡Piedra, papel o tijera!</h1>
        <p>Actualice la página para jugar otra partida</p>
        <span>jugador 1</span>
        <span>jugador 2 <br></span>
        <div>

            <?php

            $jugador1 = rand(1, 3);
            $jugador2 = rand(1, 3);
            partida($jugador1, $jugador2);
            sacarGanador($jugador1, $jugador2);

            ?>

        </div>
    </body>
</main>

</html>