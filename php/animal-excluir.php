<?php
include('conexao.php');
include('animal-banco.php');
$idanimal=$_POST['id'];

excluirAnimal($conexao, $idanimal);
header("Location:animal-lista.php");
?>

