<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
    <!-- <link rel="stylesheet" href="../bootstrap/bootstrap.css"> -->
    <link rel="stylesheet" href="../css/lista-animais/style.css">
</head>
<header>
        <div class="menu" id="menu">
            <h1>LovelyDog</h1>

            <nav class="lista-menu">
               <ul>
                  <li><a href="../index.html">Home</a></li>
                  <li><a href="../index.html">Sobre nós</a></li>
                  <li><a href="../formanimal.html">Cadastrar animal</a></li>
                  <li><a href="#">Contato</a></li>
               </ul>
            </nav>

            <button class="menu-mobile">Menu</button>
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
        <h1 class="painel-controle">Painel de controle - Animais</h1>
        <div class="container-lista">
  <?php
  $animais=listaAnimais($conexao);
  foreach ($animais as $animal):
   ?>
            <div class="card-dog">
               <p><?=ucfirst($animal['nome'])?></p>
            
               <img id="img_pet" src="upload/<?=$animal['imagem_pet']?>" height="200" width="300">


               <div class="btn-card">
                  <form action="formanimal-alterar.php" method="post">
                     <input type="hidden" id="id" name="id" value="<?=$animal['idanimal']?>">
                     <button>Alterar</button>
                  </form>

                  <form action="animal-excluir.php" method="post">
                     <input type="hidden" id="id" name="id" value="<?=$animal['idanimal']?>">
                     <button>Excluir</button>
                  </form>
               </div>
            </div>          
 <?php
  endforeach;
 ?>     
        </table>
    
        </div>
    </body>
</html>
