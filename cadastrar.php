<?php
include('conexao.php');

/*Cria as variáveis que receberão os dados do formulário*/
$nome  = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

/*Mostra na página os dados digitados com exceção da senha*/
echo "<h3>nome:   $nome</h3>";
echo "<h3>email:  $email</h3>";
echo "<h3>senha:  A senha é secreta</h3>";

//String para receber código SQL para inserção em banco de dados
$cad_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', md5('$senha'))";

if (mysqli_query($conn, $cad_usuario)) {
      echo "<h1>Novo cadastro realizado </h1></br>";
} else {
      echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
