<?php
include("conexao.php");
include("animal-banco.php");

$idanimal=$_POST['idanimal'];
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



alteraAnimal($conexao, $idanimal, $sexo, $observacoes, $raca, $idade, $pelagem, $nome, $porte, $castrado, $vacina);
header("Location:animal-lista.php");
?>
