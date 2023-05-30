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
        <label for=""> Qual a sua idade</label>
        <input type="number" name="voto">
        <button type="submit"> Verificar</button>
    </form>
    <?php 
$voto = $_GET["voto"];
if ($voto >= 16){
    echo "Você já pode votar";
}else echo "você não tem idade para votar";
    ?>
</body>
</html>