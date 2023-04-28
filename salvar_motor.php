<?php
require_once('motor.php');
$modelo = strtoupper($_POST["modelo"]);
$numero_serie = strtoupper($_POST["numero_serie"]);
$potencia = $_POST["potencia"];

$motor = new Motor($modelo, $numero_serie, $potencia);

$motor->salvar();

echo "<h1>Operação realizada com sucesso!</h1>";
?>
<p>
  <a href="index.php">Voltar</a>
</p>