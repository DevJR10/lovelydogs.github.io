<?php

include("conexao.php");

$sexo=$_POST['sexo'];
$observacoes=$_POST['observacoes'];
$raca=$_POST['raca'];
$idade=$_POST['idade'];
$pelagem=$_POST['pelagem'];
$nome=$_POST['nome'];
$arquivo=$_POST['arquivo'];
$porte=$_POST['porte'];
$castrado=$_POST['castrado'];
$vacina=$_POST['vacina']; 


$sql="insert into animal (sexo, observacoes, raca, idade, pelagem, nome, imagem_pet, porte, castrado, vacina)
values ('$sexo', '$observacoes', '$raca', '$idade' ,'$pelagem', '$nome', '$arquivo', '$porte', '$castrado', '$vacina')";


mysqli_query($conexao,$sql);

Header("Location: animal-lista.php");
