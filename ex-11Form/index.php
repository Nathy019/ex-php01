<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for=""> Qual a seu nome</label>
        <input type="text" name="nome">
        <button type="submit"> Verificar</button>
    </form>
    <?php 
$nome = $_GET["nome"];
echo "Olá $nome";
    ?>
</body>
</html>