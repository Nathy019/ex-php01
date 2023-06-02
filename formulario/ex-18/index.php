<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label >Portugues</label>
        <input type="number" name="nota1">
        <label >Matematica</label>
        <input type="number" name="nota2">
        <label >Filosofia</label>
        <input  type="number" name="nota3">
        <button type="submit">Calcular</button>
    </form>
    <?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "sua media é $media";
    ?>
</body>


</html>