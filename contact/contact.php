<?php


    if(isset($_POST['submit'])) {
        $name =  trim($_POST['name']);
        $email =  trim($_POST['email']);
        $assunto =  trim($_POST['assunto']);
        $mensagem =  trim($_POST['name']);

        $myMail = "viniciusdalsasso@hotmail.com";
        $header = "From: " . $email;
        $mensagem2 = "Mensagem recebida de: " . $name . ". /n/n" . $message;

        //email , subject, message

        mail($myMail, $assunto, $mensagem2, $header);
        header("Location: index.php?mailsend");
    }


?>