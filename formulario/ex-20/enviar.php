<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém as informações do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Simula o envio da mensagem para o WhatsApp
    $numeroWhatsapp = "+1234567890";
    $urlWhatsapp = "https://api.whatsapp.com/send?phone=" . $numeroWhatsapp . "&text=Nome: " . urlencode($nome) . "%0AE-mail: " . urlencode($email) . "%0AMensagem: " . urlencode($mensagem);

    // Redireciona o usuário para o WhatsApp
    header("Location: " . $urlWhatsapp);
    exit;
}
