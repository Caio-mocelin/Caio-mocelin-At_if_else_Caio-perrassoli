<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Média</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<div class="resultado">
    <?php
    echo "Temperatura: $temp °C<br>";

    if ($temp < 15) {
        echo "<div class='aviso'>Está muito frio!</div>";
    } elseif ($temp < 25) {
        echo "<div class='neutro'>Temperatura agradável.</div>";
    } elseif ($temp < 35) {
        echo "<div class='aviso'>Está quente!</div>";
    } else {
        echo "<div class='reprovado'>Está muito quente!</div>";
    }
    ?>
</div>

</body>
</html>
