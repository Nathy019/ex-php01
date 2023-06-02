<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for=""> Digite um número</label>
        <input type="text" name="numero">
        <button type="submit"> Tabuada</button>
    </form>
    <?php
$numero = $_POST["numero"];

for($i = 0; $i <= 10; $i++){
echo "$numero X $i = " . $numero*$i . "<br>";
}
    ?>
</body>

</html>