<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];

    $to = "pedroscarabelli03@gmail.com"; // Seu e-mail para receber as mensagens
    $subject = "Novo E-mail de $nome: $assunto";
    $message = "Você recebeu uma nova mensagem:\n\n";
    $message .= "Nome: $nome\n";
    $message .= "Assunto: $assunto\n";
    $message .= "E-mail: $email\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>