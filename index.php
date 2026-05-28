<?php
$tiempoEnCiclo = time() % 90 ;
echo $tiempoEnCiclo;

if ($tiempoEnCiclo < 30){
    $colorActivo = "green";
    echo $colorActivo;
}

elseif ($tiempoEnCiclo < 60){
    $colorActivo = "yellow";
    echo $colorActivo;
}

else {
    $colorActivo = "red";
    echo $colorActivo;
}

$segundoHastaCambio = 30 - ($tiempoEnCiclo % 30);
echo $segundoHastaCambio;

$segundoHastaCambio = max(1, 30 - ($tiempoEnCiclo % 30));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semaforo</title>
    <meta http-equiv="refresh" content="<?= $segundoHastaCambio ?>">

    <style>

        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #e8e8e8;
            font-family: system-ui, sans-serif;
        }

        .semaforo{
            background: #1a1a1a;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }

        .luz{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 12px 0;
            background: #333;
            border: 4px solid #0000;
            transition: all 0.3s ease;
        }

        .red.active {background: #ff3b30; box-shadow: 0 0 25px #ff3b30;}
        .yellow.active {background: #ffcc00; box-shadow: 0 0 25px #ffcc00;}
        .green.active {background: #34c759; box-shadow: 0 0 25px #34c759;}

    </style>
</head>
<body>

    <div class="semaforo">
        <div class="luz red <?= $colorActivo === 'red' ? 'active' : '' ?>"></div>
        <div class="luz yellow <?= $colorActivo === 'yellow' ? 'active' : '' ?>"></div>
        <div class="luz green <?= $colorActivo === 'green' ? 'active' : '' ?>"></div>
    </div>

    <p style="margin-top: 20px; color: #666;">
        Cambio en: <strong><?= $segundoHastaCambio ?></strong> segundos
    </p>



</body>
</html>