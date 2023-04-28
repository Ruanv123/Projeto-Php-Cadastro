<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alerta</title>
  <style>
    * {
      text-align: center;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #323232;
      color: #fff;
    }

    h1 {
      margin-top: 25px;
    }

    p {
      margin-top: 15px;
    }

    a {
      color: #fff;
    }
  </style>
</head>

<body>
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
</body>

</html>