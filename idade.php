<?php
define("ANO_ATUAL", 2025);
?>

<form method="post">
    Informe o ano de nascimento: <input type="number" name="ano_nascimento">
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano_nascimento = $_POST["ano_nascimento"];
    $idade = ANO_ATUAL - $ano_nascimento;
    $anos_ate_hoje = $idade; 
    $idade_em_2050 = 2050 - $ano_nascimento;

    echo "<br>Idade atual: $idade anos<br>";
    echo "Anos vividos: $anos_ate_hoje anos<br>";
    echo "Idade em 2050: $idade_em_2050 anos<br>";
}
?>