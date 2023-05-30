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
  $numero = $_GET ["numero"];
  if ($numero % 3 == 0 && $numero % 5 == 0){
    echo "O número é divisível por 3 e por 5";
  } else 
  echo "O número não é divisível por 3 e por 5";
    ?>
</body>
</html>