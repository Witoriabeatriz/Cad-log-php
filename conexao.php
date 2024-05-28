<?php

$servidor = "localhost";
$usuario = "root";
$senha = "l&o02783";
$dbname = "DBcadUsuario";

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>
