<?php

function insereAnimal($conexao,$sexo, $observacoes, $raca, $idade, $pelagem, $nome, $porte, $castrado, $vacina){
$sql="insert into animal(sexo, observacoes, raca, idade, pelagem, nome, porte, castrado, vacina) values('$sexo', '$observacoes', '$raca', '$idade', '$pelagem', '$nome', '$porte', '$castrado', '$vacina')";
return mysqli_query($conexao,$sql);
}

function listaAnimais($conexao){
$animais=array();
$sql="select * from animal";
$resultado=mysqli_query($conexao,$sql);

while($animal= mysqli_fetch_assoc($resultado)){
   array_push($animais,$animal);
}
return $animais;
}
function excluirAnimal($conexao,$idanimal){
    $query="delete from animal where idanimal='$idanimal'";
    return mysqli_query($conexao,$query);
}

function alteraAnimal($conexao, $idanimal, $sexo, $observacoes, $raca, $idade, $pelagem, $nome, $porte, $castrado, $vacina){
$query="update animal set sexo='$sexo', observacoes= '$observacoes', raca='$raca', idade='$idade', pelagem='$pelagem', nome='$nome', porte='$porte', castrado='$castrado', vacina='$vacina' where idanimal='$idanimal'";
return mysqli_query($conexao,$query);
}
function buscaAnimal($conexao,$idanimal){
   $query="select * from animal where idanimal='$idanimal'";
   $resultado=mysqli_query($conexao,$query);
   return mysqli_fetch_assoc($resultado);
}
?>
