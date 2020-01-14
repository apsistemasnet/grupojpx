<?php

// verifique o envio do formulário - se ele não existir, envie novamente para o formulário de contato
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: contact.php'); exit;
}
	
// obter os dados publicados
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$phone = $_POST['contact_phone'];
$message = $_POST['contact_message'];
	
// verifique se um nome foi digitado
if (empty($name))
    $error = 'Você deve digitar o seu nome.';
// verifique se um endereço de e-mail foi inserido
elseif (empty($email_address)) 
    $error = 'Você deve digitar seu endereço de e-mail.';
// verifique se há um endereço de email válido
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'Você deve inserir um endereço de email válido.';
// verifique se um número de telefone foi digitado
if (empty($phone))
    $error = 'Você deve digitar seu número de telefone.';
// verifique se uma mensagem foi inserida
elseif (empty($message))
    $error = 'Você deve inserir uma mensagem.';
		
// verifique se um erro foi encontrado - se houver, envie o usuário de volta ao formulário
if (isset($error)) {
    header('Location: contact.php?e='.urlencode($error)); exit;
}

$headers = "From: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

//escreva o conteúdo do email
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Phone Number: $phone\n";
$email_content .= "Message:\n\n$message";
	
// envie o email
//Insira suas informações abaixo para que o formulário funcione!
mail ('atendimento@grupojpx.com', 'Grupo JPX - Envio do formulário de contato', $email_content, $headers);
	
// send the user back to the form
header('Location: contact.html?s='.urlencode('Obrigado pela sua mensagem.')); exit;

?>