<?php

// SE A SESSÃO NÃO FOR TRUE, ELE É REDIRECIONADO PARA A PÁGINA DE LOGIN
if($_SESSION['login'] != 'true'){

	header('location:login_cms_view.php');
}else{

	$nome_usuario = $_SESSION['nome'];
}

?>

<div id="container-cms">

    <?php require_once('header.php'); ?>

    <section>

        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">

          <a href="sair.php"> sair </a><Br>

        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
