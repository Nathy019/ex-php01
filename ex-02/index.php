<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $idade = $_GET ["idade"];
    if($idade >= 18){
        echo "você é maior de idade";
    } else echo "você ainda é de menor";
    ?>
</body>
</html>