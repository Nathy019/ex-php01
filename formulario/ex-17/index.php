<!DOCTYPE html>
<html>
<head>
    <title>Lista de Compras</title>
</head>
<body>
    <h2>Minha Lista de Compras</h2>

    <form method="POST" action="exibir_lista.php">
        <label for="itens">Digite os itens da lista de compras, um por linha:</label><br>
        <textarea name="itens" id="itens" rows="5" cols="30"></textarea><br><br>
        <input type="submit" value="Enviar Lista">
    </form>
</body>
</html>
