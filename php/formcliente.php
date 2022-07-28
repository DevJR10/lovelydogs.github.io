<?php

include("conexao.php");

$nascimento=$_POST['nascimento'];
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$telefone=$_POST['telefone'];



$sql="insert into cliente (nascimento, cpf, nome, email, senha, telefone)
values ('$nascimento','$cpf', '$nome', '$email', '$senha', '$telefone')";

mysqli_query($conexao,$sql);

?>