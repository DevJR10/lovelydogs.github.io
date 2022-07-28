

<?php
include("conexao.php");
if($_POST){

    $email=$_POST["email"];
    $senha=$_POST["senha"];
    
    function buscaUsuario($conexao, $email, $senha){
        $sql = "select * from cliente where email = '$email' and senha ='$senha'";
        $resultado = mysqli_query($conexao,$sql);
        return mysqli_fetch_assoc($resultado);
    }


    if(buscaUsuario($conexao,$email,$senha)){
       session_start();
       $_SESSION['email']=$email;
       $consulta=buscaUsuario($conexao, $email, $senha);
       $_SESSION['nome']= $consulta['nome'];
       $_SESSION['log']='ativo';
       header("Location:principal.php");

    }else{
        echo "Usuario ou senha inválida<br>";
        echo "<a href='index.html'>Voltar para a tela de login</a><br>";
    }
}
?>