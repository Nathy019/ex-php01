<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<label for="">Digite um numero</label>
<input type="number" name="numero">
<button type="submit" >Calcular</button>
</form>
    <?php
   $numero = $_POST["numero"];
   if($numero % 2 == 0){
    echo "Este numero é par";
   } else echo "Este numero é impar";
    ?>
</body>
</html>

