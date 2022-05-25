<?php

include("conexao.php");

$email = $_POST['nome'];
$senha=  $_POST['senha'];

function buscaUsuario($conexao, $email, $senha){
    $sql = "select * from cliente where email = '$email' and senha ='$senha'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

if($_POST){
    $email=$_POST["email"];
    $senha = $_POST["senha"];

    if(buscaUsuario($conexao,$email,$senha)){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['log'] = "ativo";
        header ("Location:formanimal.html");
        die();
    }

    else{
        
        echo "<script>alert('Usuario ou senha invalidos')</script>";
    
    }
}

?>