<?php
session_start();
$conexao=mysqli_connect("127.0.0.1", "root", "","partyup");
if(!$conexao){
    echo 'A conexao foi pra cucuia';
}
?>