<?php
// Creo unas variables para guardar mis datos de conexión
$database = 'miguelphp-mydbinstance-udsgxhsbwbi5.csqeaizkqfym.us-east-1.rds.amazonaws.com';
$nombreBBDD = 'template';
$usuario = 'username';
$contrasena = 'Usuario0?';

try {
  //conexión a la BBDD
  $con = new PDO("mysql:host=$database;dbname=$nombreBBDD", $usuario, $contrasena);
  // Creación de la tabla de pruba
  $req = $con->prepare("CREATE TABLE usuario (
  idUsu INT(11)AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(90) NOT NULL )");
  $req->execute();
  //Inserción de datos en la tabla creada anteriormente
  $req = $con->prepare("INSERT INTO usuario (nombre) VALUES ('Alvaro')");
  $req->execute();

  $req = $con->prepare("SELECT * FROM usuario");
  $req->execute();

  // Mostramos todos los resultados
  while ($fila = $req->fetch()) {
      echo "<h1> Bienvenido: " . $fila['nombre'] . "</h1>";
  }
  
  $req = $con->prepare("DROP TABLE usuario");
  $req->execute();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
  die();
}
?>