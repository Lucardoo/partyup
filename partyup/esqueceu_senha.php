<?php
require('inc/conexao.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$email = $_POST['email'];

$sql = "SELECT email, senha from USUARIO WHERE email = '$email' ";

if($usuario = mysqli_fetch_assoc(mysqli_query($conexao,$sql)) != NULL){
    //gera uma hash aleatoria
    $nova_senha = $nova_senha = substr(md5(rand(5,15)), 0, 6);

    //atualiza a senha no banco q foi salva na variavel nova_senha para enviar no email dps
    $sql = "UPDATE usuario SET senha = '$nova_senha' WHERE email = '$email' ";
    
    mysqli_query($conexao,$sql);

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/SMTP.php";

    $mail = new PHPMailer();  
	
    //  opçao de idioma, setado como br	
    $mail->SetLanguage("br"); 

    // habilitando SMTP	
    $mail->IsSMTP(); 

    // enviando como HTML
    $mail->IsHTML(true); 
	
    // Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens	
    $mail->SMTPDebug = 0;  
	
    // habilitando autenticação	
    $mail->SMTPAuth = true;  
	
    // habilitando tranferêcia segura (obrigatório)	
    $mail->SMTPSecure = 'tls'; 


    // Configurações para utilização do SMTP do Gmail  

    $mail->Host = 'smtp.gmail.com';

    $mail->Port = 587; // Porta de envio de e-mails do Gmail

    $mail->Username = 'marcoslucardo@gmail.com';

    $mail->Password = 'dragon040693';

    $mail->CharSet = "utf-8";

    // Remetente da mensagem

    $mail->SetFrom('marcoslucardo@gmail.com');
	
    // Endereço de destino do email
    $mail->AddAddress($email); 
	
    // Endereço para resposta
    // Assunto e Corpo do email

    $mail->Subject = "Reset de senha";

    $mail->Body = "Sua nova senha eh: " . $nova_senha;

    $mail->send();

    header('location: index.php?email=true');
} else {
    header('location: index.php?email=false');
}