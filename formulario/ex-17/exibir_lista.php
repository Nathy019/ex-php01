<?php
    // Obter a entrada do usuário
    $itens = $_POST["itens"] ??'';

    // Exibir a lista de compras completa
    echo "<h2>Lista de Compras:</h2>";
    echo "<ul>";
    $listaItens = explode("\n", $itens);//
    foreach ($listaItens as $item) {
        echo "<li>" . trim($item) . "</li>";
    }
    echo "</ul>";
?>
