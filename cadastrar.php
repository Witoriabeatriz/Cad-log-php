<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cadastro</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        form {
            max-width: 400px;
            margin: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Witória Beatriz</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" aria-current="page" href="index.php">Início</a>
        <a class="nav-link active" href="cadastrar.php">Cadastre-se</a>
        <a class="nav-link" href="login.php">Login</a>
      </nav>
    </div>
  </header>
  <title>Cadastre-se</title>
  <main class="">
      <br><br>
    <h1>Cadastre-se</h1>
    <form action="cadastro.php" method="post">

    <label for="nome"></label><br>
    <input type="text" id="nome" name="nome" placeholder="Nome" required><br>

    <label for="email"></label><br>
    <input type="email" id="email" name="email" placeholder="Criar e-mail" required><br>

    <label for="email"></label><br>
    <input type="email" id="cemail" name="cemail" placeholder="Confirmar e-mail" required><br>

    <label for="senha"></label><br>
    <input type="password" id="senha" name="senha" placeholder="Criar senha" required><br>

    <label for="senha"></label><br>
    <input type="password" id="csenha" name="csenha" placeholder="Confirmar senha" required><br>
    <br>
    <input type="submit" value="Cadastrar"><br>
    </form>
    </main>
    <?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria as variáveis que receberão os dados do formulário
    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Mostra na página os dados digitados com exceção da senha
    echo "<h3>Nome: $nome</h3>";
    echo "<h3>Email: $email</h3>";
    echo "<h3>Senha: A senha é secreta</h3>";

    // String para receber código SQL para inserção em banco de dados
    $cad_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', md5('$senha'))";

    // Executa a consulta e verifica se foi bem-sucedida
    if (mysqli_query($conn, $cad_usuario)) {
        echo "<h1>Novo cadastro realizado</h1><br>";
    } else {
        echo "Erro: " . $cad_usuario . "<br>" . mysqli_error($conn);
    }

    // Fecha a conexão
    mysqli_close($conn);
}
?>
<br>
  <footer class="mt-auto text-white-50">
      <br>
    <p>
        Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a> por <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.<br>
        Projeto criado por <a href="https://github.com/Witoriabeatriz" class="text-white">@Witóriabeatriz</a>.
    </p>
</footer>
</body>
</html>