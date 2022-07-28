<?php

  include("conexao.php");

  $msg = false;

  if(isset($_FILES['arquivo'])){

    $novo_nome = $_FILES['arquivo']['name']; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql_code = "INSERT INTO animal(imagem_pet) VALUES('$novo_nome')";

    if(mysqli_query($conexao,$sql_code))
      $msg = "Arquivo enviado com sucesso!";
    else
      $msg = "Falha ao enviar arquivo.";

  }

?>
<h1>Upload de Arquivos</h1>
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  Arquivo: <input type="file" required name="arquivo">
  <input type="submit" value="Salvar">
</form>