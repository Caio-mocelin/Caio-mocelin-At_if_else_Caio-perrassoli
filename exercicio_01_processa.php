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
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "Média: " . number_format($media, 2) . "<br>";

    if ($media >= 7) {
        echo "<div class='aprovado'>Situação: APROVADO</div>";
    } else {
        echo "<div class='reprovado'>Situação: REPROVADO</div>";
    }
    ?>
</div>

</body>
</html>