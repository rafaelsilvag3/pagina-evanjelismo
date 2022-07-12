<?php


if(isset($_POST['email']) && !empty($_POST['email']){'email'})

$nome =addcslashes($_POST['name']);
$email =addcslashes($_POST['email']);
$mensagem =addcslashes($_POST['message']);


$to = "rafaelsilvag3@hormail.com";
$subject = "rafaelsilvag3";
$body = "nome".$nome. "/r/n".
        "Email".$email. "/r/n".
        "mensagem".$mensagem;
$header = "fron:rafaelsilvag3@hotmail.com"."/r/n".
        "reply-To:".$email"/r/n".
        "x=mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("email enviado com sucesso!");

}else{
    echo("o emai não pode ser enviado");
}


}
?>