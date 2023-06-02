<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $valor = $_GET["valor"];
    if ($valor > 0 ){
        echo "o valor é positivo";
    }
    else if($valor < 0 ){
        echo "valor pé negativo";
    }
    else {
        echo "o valor é zero";
    }
    ?>
</body>
</html>