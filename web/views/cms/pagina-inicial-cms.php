<?php
session_start();
// SE A SESSÃO FOR DIFERENTE DE TRUE ELE E REDIRECIONADA A VIEW DE LOGIN
if($_SESSION['login'] != 'true')
    {
        header('location: login_cms_view.php');
    }

      $nome_usuario = $_SESSION['nome'];



?>


<!DOCTYPE html>
<html>
  <head>
    <title>Sistema Gerenciador do Site</title>
    <link rel="stylesheet" type="text/css" href="css/estilo_pagina_principal_cms.css">

  </head>
  <body>
    <div id="container-cms">
        <header>
          <h1>Cabeçalho CMS</h1>
          Bem vindo, <?php echo $nome_usuario ?>
        </header>

        <section>

            <div id="menu-cms">
                <li>
                    <ul><a href="cms_galeria_fotos.php">Gerenciar galeria de fotos</a></ul>
                    <ul></ul>
                    <ul></ul>
                    <ul></ul>
                </li>
            </div>
            <div id="conteudo-cms">

              <a href="sair.php"> sair </a>
            </div>
        </section>
        <footer>
            <h1>rodape</h1>
        </footer>
    </div>

  </body>
</html>
