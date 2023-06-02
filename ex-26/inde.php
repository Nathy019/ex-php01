<?php
$numeros = [10, 30, 40, 70, 20];

$soma = 0;
$contador = 0;

foreach ($numeros as $numero){
$soma += $numero;
$contador++;
};

if($contador > 0){
$media = $soma / $contador;

    echo "a soma da média é: " . $media;
}  else {
    echo "array fazio";
}

?>