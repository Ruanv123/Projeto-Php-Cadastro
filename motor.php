<?php
require_once('salvar_motor.php');
class Motor
{
  private $modelo = "";
  private $numero_serie = "";
  private $potencia = 0;

  public function __construct($modelo, $numero_serie, $potencia)
  {
    $this->modelo = $modelo;
    $this->numero_serie = $numero_serie;
    $this->potencia = $potencia;
  }
  public function get_modelo()
  {
    return $this->modelo;
  }

  public function get_numero_serie()
  {
    return $this->numero_serie;
  }

  public function get_potencia()
  {
    return $this->potencia;
  }

  public function salvar()
  {
    if ($this->potencia < 0) {
      return "Potencia não pode ser negativa!";
    }

    $con = new mysqli("localhost", "root", "", "revisao");
    $stmt = $con->prepare("INSERT INTO motores(modelo,numero_serie,potencia) VALUES (?,?,?)");
    $stmt->bind_param("ssi", $this->modelo, $this->numero_serie, $this->potencia);
    $stmt->execute();
    $stmt->close();
    $con->close();
  }
}
?>