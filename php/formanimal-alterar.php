<?php
include("conexao.php");
include("animal-banco.php");
$idanimal=$_POST['idanimal'];
$animal= buscaAnimal($conexao, $idanimal);

//session_start();
// if($_SESSION['log']!="ativo"){
//    session_destroy();
//    header("Location:animal-lista.php");
// }
// else{
//     echo "Olá, " . $_SESSION['usuario'] . " Você está logado no nosso sistema!!<br>";
// // 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/estilo-animal.css">
    <title>cadastro animal</title>
</head>
<body>
    <h1>ALterar cadastro de animais</h1>
    <div id="formulario">
    <form method="post" action="animal-alterar.php">
    <div class="row">
    <div class="col-md-5">

    <input type="hidden" name="idanimal" value="<?=$animal['idanimal']?>">

            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?=$animal['nome']?>">
                


            <label for="sexo" class="form-label">Sexo</label>
              
                <br>

            <input type="radio" id="sexo-m" name="sexo" value="Masculino">
            <label for="sexo-m">Masculino</label>
                
                <br>

            <input type="radio" id="sexo-f" name="sexo" value="Feminino">
            <label class="feminino" for="sexo-f">Feminino</label> <br>
       
                   
     
            <label for="Raça" class="form-label">Raça (nome comum)</label>
            <input type="text" class="form-control" id="raca" name="raca" value="<?=$animal['raca']?>">



        
             
              <label for="idade" class="form-label">Idade</label>
            <input type="text" class="form-control" id="idade" name="idade" value="<?=$animal['idade']?>">
          
        
      
              <label for="Pelagem" class="form-label">Pelagem</label>
              
              <input type="text" class="form-control" id="pelagem" name="pelagem" value="<?=$animal['pelagem']?>">
              
           
              </div>

              

              <div class="col-md-5">
                  
                <label for="porte" class="form-label">Porte</label><br>
              <input type="text" class="form-control" id="porte" name="porte" value="<?=$animal['porte']?>">
           
            
            
                <label for="castrado" class="form-label">Castrado(a)</label>
                <br>
                <input type="radio" id="castrado-s" name="castrado" value="Sim">
                <label for="castrado-s">Sim</label><br>
                <input type="radio" id="castrado-n" name="castrado" value="Não">
                <label for="castrado-n">Não</label><br>
            
               
               
                <label for="vacina" class="form-label">Vacinas</label><br>
                <textarea rows="2"  cols="40" class="form-control" id="vacina" name="vacina"><?=$animal['vacina']?></textarea>
            
               
             
                <label for="obs" class="form-label">Observações</label><br>
                <textarea rows="4"  cols="40" class="form-control" id="obs" name="observacoes"><?=$animal['observacoes']?></textarea>
            
            </div>
            </div>
            <br>
    

            <div class="botao">
              <button type="submit" class="btn btn-secundary">Voltar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            
            

          </form>
        </div>
    </body>
    </html>

</body>
</html>
