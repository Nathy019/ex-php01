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
        <label for=""> Digite sua idade</label>
        <input type="text" name="idade">
        <label for=""> Digite sua altura</label>
        <input type="text" name="altura">
        
        <button type="submit"> Verificar</button>
    </form>
    <?php 
    
// $idade = $_POST ["idade"];
// $altura = $_POST ["altura"];
// if($idade && $altura){
//     echo "voce tem $idade e $altura";
// }
// else{
//     echo "Valor invalido, preencha os campos!";
// }

$idade = $_POST ["idade"];
$altura = $_POST ["altura"];
echo(($idade && $altura))?"você tem $idade e $altura":"Valor invalido, preencha os campos!";
?>
</body>
</html>