<?php
class Conexion {
  private $host = "localhost";
  private $user = "root"; // Reemplazar con tu nombre de usuario
  private $password = ""; // Reemplazar con tu contraseña
  private $database = "prueba"; // Reemplazar con el nombre de tu base de datos

  public function conectar() {
    $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
    if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
    }
    return $conn;
  }
}

?>