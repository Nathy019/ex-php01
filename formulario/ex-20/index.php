<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Contato</title>
</head>

<body>
    <h1>Formulário de Contato</h1>
    <form method="POST" action="enviar.php">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea name="mensagem" id="mensagem" rows="5"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>