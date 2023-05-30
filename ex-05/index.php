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
   $celsius  = $_GET["celsius"];
   echo " agora a temperatura entá em" . $celsius * (9/5) + 32 . " ° Farhrenhit";
    ?>
</body>
</html>