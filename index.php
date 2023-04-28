<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Motores</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="cx">
    <h1 id="titulo">Cadastro de Motores</h1>
    <form method="post" action="salvar_motor.php" id="form">
      <label class="lbl">
        digite o modelo do motor:
        <input type="text" name="modelo" placeholder="digite o modelo" />
      </label>
      <label class="lbl">
        digite o número de série do motor:
        <input type="text" name="numero_serie" placeholder="digite o numero de serie" />
      </label>
      <label class="lbl">
        digite a potencia:

        <input type="text" name="potencia" placeholder="digite a potencia" />
      </label>
      <button id="btn" type="submit">enviar</button>
    </form>
    <p style="text-align: center; margin-top: 15px;">
      <a href="listar_motores.php">Listar motores</a>
    </p>
  </div>
</body>

</html>