<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  $con = new mysqli("localhost", "root", "", "revisao");

  $stmt = $con->prepare("select * from motores");

  $stmt->execute();

  $result = $stmt->get_result();

  while ($row = $result->fetch_array()) {
    echo $row["modelo"], " - ", $row["numero_serie"], " - ", $row["potencia"] . " HP", "<br>";
  }

  $result->close();

  $stmt->close();

  $con->close();
  ?>
  <p>
    <a href="index.php">Voltar</a>
  </p>
</body>

</html>