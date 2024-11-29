<?php
include_once 'banco.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar e sanitizar os dados do formulário
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $numero = htmlspecialchars(trim($_POST['number']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validação básica
    if (empty($name) || empty($email) || empty($number) || empty($subject) ||  empty($message)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Configurações do e-mail
    $to = "seuemail@exemplo.com"; // Altere para seu e-mail
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Mensagem
    $emailMessage = "Nome: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Telefone: $number\n";
    $emailMessage .= "Assunto: $subject\n";
    $emailMessage .= "Mensagem: $message\n";

    // Enviar e-mail
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
