<?php

// SE A SESSÃO NÃO FOR TRUE, ELE É REDIRECIONADO PARA A PÁGINA DE LOGIN
if($_SESSION['login'] != 'true'){

	header('location:views/cms/login_cms_view.php');
}else{

	$nome_usuario = $_SESSION['nome'];
}

?>

<div id="container-cms">

    <?php require_once('header.php'); ?>

    <section>

        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">



        </div>

		</section>

		<?php require_once('rodape.php'); ?>

</div>
