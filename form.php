<?php
if(isset($_POST['name']) && !empty($_POST['nome'])) {
    $name = addslashes([$_POST['name']]);
    $email = addslashes([$_POST['email']]);
    $phone = addslashes([$_POST['phone']]);
    $msg = addslashes([$_POST['message']]);

    $to = "valdivino@gamill.com";
    $subject = "Pergunta do Contato";
    $body = "Nome: ".$name." - E-mail: ".$email." - Mensagem: ".$msg;
    $header = "From: sssssss@.com"."\r\n".
               "Reply-To: ".$email."\r\n".
               "X-Mailer: PHP/".phpversion();
    mail($to, $subject, $body, $header);

    echo "<h2>E-mail enviado com sucesso!</h2>"

    exit;
}
 ?>