<?php
session_start();
$conexao= mysqli_connect("localhost", "root", "123456","partyup");
if(!$conexao){
    echo 'A conexao foi pra cucuia';
}
?>