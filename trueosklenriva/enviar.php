<?php include '../analytics.php' ?>
<?php
$ref = $_GET['ref'];
$email_de = $_GET['fromn'];
$nome_de = $_GET['frome'];
$email_para = 'oficial@osklen.com.br';
$mensagem='
A pedido de: '.$nome_de.' \r\n
Email: '.$email_de.' \r\n
Referencia: '.$ref.' \r\n
';
$assunto = 'Osklen True Riva';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nome_de <$email_de>\r\n";

mail($email_para,$assunto,$mensagem,$headers);
?>