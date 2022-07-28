<?php

include("conexao.php");

$sexo=$_POST['sexo'];
$observacoes=$_POST['observacoes'];
$raca=$_POST['raca'];
$idade=$_POST['idade'];
$pelagem=$_POST['pelagem'];
$nome=$_POST['nome'];
//$imagem_pet=$_POST['imagem_pet'];
$porte=$_POST['porte'];
$castrado=$_POST['castrado'];
$vacina=$_POST['vacina']; 



$sql="insert into animal (sexo, observacoes, raca, idade, pelagem, nome, porte, castrado, vacina)
values ('$sexo', '$observacoes', '$raca', '$idade' ,'$pelagem', '$nome', '$porte', '$castrado', '$vacina')";


//'$nascimento', '$imagem_pet',

//nascimento, nome, imagem_pet,

mysqli_query($conexao,$sql);
