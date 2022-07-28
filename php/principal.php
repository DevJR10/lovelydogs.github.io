<?php
session_start();
if($_SESSION['log']!='ativo'){
    session_destroy();
    header("Location:index.html");
}else{
    echo "Olá " . $_SESSION['nome'] . ", Você está logado no nosso sistema!!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="menu">
            <h1>LovelyDog</h1>

            <nav id="lista-menu">
               <ul>
                  <a href="#home">Home</a>
                  <a href="#sobre">Sobre nós</a>
                  <a href="adote.html">Adote</a>
                  <a href="#">Contato</a>
                  <a id="login-active" href="">Login &#10132;</a>
               </ul>
            </nav>

            <a data-modal="abrir" class="login-cadastro" href="#" id="login-disabled">Login &#10132;</a>

            <button class="active-mobile">Menu</button>
        </div>
    </header>

    <main class="principal">
        <div class="layout" id="home">
            <div class="amiguinho">
                <h1>Encontre um novo amigo para te fazer companhia.</h1>
                <p>Somos uma plataforma intermediária que com ajudas e parcerias de ONG'S, ajudamos você a encontrar um novo melhor amigo para alegrar o seu dia a dia.</p>
                <button>Saiba mais</button>
                <button>Contato</button>
            </div>
            <img src="imgs/undraw_relaxing_walk_mljx.svg" alt="">
        </div>  
    </main>

    <section class="sobre-nos" id="sobre">
        <h2>Sobre nós</h2>
        <div class="sobre-texto">
           <h2>S</h2>
        </div>

        <div class="sobre-fotos">

        </div>
    </section>



    <script src="js/script.js"></script>
</body>
</html>