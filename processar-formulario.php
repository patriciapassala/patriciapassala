<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    # E-mail de destino
    $para = "patricia_passala@hotmail.com"; 

    // Configura o assunto do e-mail
    $assunto = "Nova mensagem do formulário de contato";

    # Montando o corpo do e-mail
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    $headers = "From: $email"; // Define o remetente do e-mail como o endereço do remetente
    mail($para, $assunto, $mensagem_email, $headers);

    // Redireciona de volta para a página do formulário com uma mensagem de sucesso
    header("Location: index.html?enviado=1");
} else {
    // Se o formulário não foi enviado, redireciona de volta para o formulário
    header("Location: index.html");
}
?>