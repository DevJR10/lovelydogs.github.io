<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<header>
        <div class="menu">
            <h1>LovelyDog</h1>
            <nav id="lista-menu">
               <ul>
                  <a href="index.html">Home</a>
                  <a href="formanimal.html">Cadastro de Animais </a>
                  <a href="logout.php">Sair</a>

            
               </ul>
            </nav>

<button class="active-mobile">Menu</button>
        </div>
    </header>
<?php
include('conexao.php');
include('animal-banco.php');


/*session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:index.php");
}
else{
    echo "Olá, " . $_SESSION['usuario'] . " Você está logado no nosso sistema!!<br>";
}
*/

?>
        <div class="container">
        <h1 align="center">Animais</h1>
        <table class="table table-active table-bordered table-striped">
  <?php
  $animais=listaAnimais($conexao);
  foreach ($animais as $animal):
   ?>
            <tr>
                <td><?=$animal['idanimal']?></td>
                <td><?=$animal['nome']?></td>
                <td><?=$animal['sexo']?></td>
                 <td><?=$animal['raca']?></td>
                <td><?=$animal['idade']?></td>
                <td><?=$animal['pelagem']?></td>
                <td><?=$animal['imagem_pet']?></td>
                <td><?=$animal['porte']?></td>
                <td><?=$animal['castrado']?></td>
                <td><?=$animal['vacina']?></td>
                <td><?=$animal['observacoes']?></td>




                <td><form action="animal-excluir.php" method="post">
                    <input type="hidden" name="id" value="<?=$animal['idanimal']?>">
                    <button class="btn-danger">Excluir</button>
                    </form>
                </td>
                
                 <td><form action="formanimal-alterar.php" method="post">
                    <input type="hidden" name="idanimal" value="<?=$animal['idanimal']?>">
                    <button class="btn-primary">Alterar</button>
                   </form>
                </td>
            </tr>
 <?php
  endforeach;
 ?>     
        </table>
    
        </div>
    </body>
</html>
