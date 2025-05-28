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
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);
echo "IMC: " . number_format($imc, 2) . "<br>";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc < 25) {
    echo "Classificação: Peso normal";
} elseif ($imc < 30) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}
?>
</div>

</body>
</html>

</body>
</html>