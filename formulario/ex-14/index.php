<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Escola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div style="text-align: center;">
        <h1>😀 Cadastro Pessoas😎</h1>

        <form style="text-align: center;" method="post" action="">
            <div class="col-12"></div>
            <label class="form-label">Nome</label>
            <input class="form_control" name="nome">
    </div>
    <div style="text-align: center;">
        <label class="form-label">idade</label>
        <input class="form_control" name="idade">
    </div>
    <div style="background:blue; color:white; text-align:center;">
        <button type="submi" type="button">Salvar</button>
    </div>
    </div>
    </form>

    <?php
    if (isset($_POST["nome"])) {
        $nome  = $_POST["nome"];
        $idade = $_POST["idade"];
    } else {
        $nome = "";
        $idade = "";
    }

    //dados de conexão com o Banco de dados
    $servidor = "localhost";
    $usuario_bd = "root";
    $senha_usuario = "";
    $banco_dados = "pessoa_cadastro";

    //Abrir a conexão com o banco de dados
    $conexao = mysqli_connect($servidor, $usuario_bd, $senha_usuario, $banco_dados);

    //criar cadastros 
    $sql = "insert into pessoas(nome, idade) values('$nome', '$idade')";

    //executar o sql no banco de dados
    if ($nome != "") {
        mysqli_query($conexao, $sql);
    }

    //fechar a conexão com o banco de dados
    mysqli_close($conexao);
    ?>

    <?php
    //Abrir a conexão com o banco de dados
    $conexao = mysqli_connect($servidor, $usuario_bd, $senha_usuario, $banco_dados);

    //executar o sql no banco de dados
    $sql = "select * from pessoas";

    //executar o sql no banco de dados

    $todasAsPessoas = mysqli_query($conexao, $sql);

    //print_r() serve para debugar o codigo ou seja usado para entender um erro

    //laço de repetição 
    while ($umaPessoa = mysqli_fetch_assoc($todasAsPessoas)) {
        echo "<br><br>" . $umaPessoa["nome"] . "-" . $umaPessoa["idade"] . "";
    }
    //fechar a conexão com o banco de dados
    mysqli_close($conexao);

    ?>
</body>

</html>