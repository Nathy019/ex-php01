<?php $numeros = array(10, 20, 30);
print_r($numeros);
echo "<br>";
$total = 0;
foreach ($numeros as $numero) {
    $total = $total + $numero;
}
echo $total;
?>