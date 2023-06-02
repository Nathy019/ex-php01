<?php
    // Obter o valor do campo de números no formulario
    $numeros = $_POST["numeros"] ??'';

    // Separar os números em um array com a função explode()
    $arrayNumeros = explode(",", $numeros);

    // 
    $soma = array_sum($arrayNumeros);//array_sum serve para calcular a soma de todos os números do array.

    // Exibir a soma
    echo "A soma dos números é: " . $soma;
?>
