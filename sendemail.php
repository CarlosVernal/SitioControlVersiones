<?php
$name       = @trim(stripslashes($_GET['name'])); 
$from       = @trim(stripslashes($_GET['email'])); 
$subject    = @trim(stripslashes($_GET['subject'])); 
$message    = @trim(stripslashes($_GET['message'])); 
$to   		= 'carlos.vernal.navarrete@gmail.com';//replace with your email
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();
mail($to, $subject, $message, implode("\r\n", $headers));
echo " <script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='index.html';</script> ";
?>