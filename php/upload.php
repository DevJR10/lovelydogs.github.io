<?php

  include("conexao.php");

  if(isset($_FILES['imagem'])){

   $sexo=$_POST['sexo'];
   $observacoes=$_POST['observacoes'];
   $raca=$_POST['raca'];
   $idade=$_POST['idade'];
   $pelagem=$_POST['pelagem'];
   $nome=$_POST['nome'];
   $imagem = $_FILES['imagem']['name'];
   $porte=$_POST['porte'];
   $castrado=$_POST['castrado'];
   $vacina=$_POST['vacina']; 
   $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

   
   $sql="insert into animal (sexo, observacoes, raca, idade, pelagem, nome, imagem_pet, porte, castrado, vacina)
   values ('$sexo', '$observacoes', '$raca', '$idade' ,'$pelagem', '$nome', '$imagem', '$porte', '$castrado', '$vacina')";

    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem); //efetua o upload

    if(mysqli_query($conexao,$sql)){
      $msg = "Arquivo enviado com sucesso!";
      header("Location:animal-lista.php");  
    }
    else{
      $msg = "Falha ao enviar arquivo.";

      header("Location:animal-lista.php");  
    }
   }
?>
