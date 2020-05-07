<?php
if(isset($_POST['email'])&& !empty($_POST['email'])){
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$tel =addslashes($_POST['telefone']);
$msg = addslashes($_POST['message']);
$to = "lucas.rochapl97@gmail.com";
$subject = "Contato";
$body = "Nome:" . $nome. "\r\n" .
        "Email:" . $email. "\r\n" .
        "Telefone:" . $tel. "\r\n".
        "Mensagem:" . $msg . "\r\n";
$header = "From:lucasribeiro_bh008@hotmail.com"."\r\n"
            ."Reply-to:".$email."\r\n"
            ."X=Mailer:PHP/". phpversion();

if(mail($to,$subject,$body,$header)){
    echo "Seu e-mail foi enviado com sucesso,
     em breve entraremos em contato com você";

}else{
    echo "Ocorreu um erro, seu e-mail não pode ser enviado :(";
}
}
?>