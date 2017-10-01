<?php

// SE A SESSÃO NÃO FOR TRUE, ELE É REDIRECIONADO PARA A PÁGINA DE LOGIN
if($_SESSION['login'] != 'true'){

	header('location: login_cms_view.php');
}else{

	$nome_usuario = $_SESSION['nome'];
}

?>

<div id="container-cms">

    <header>
      <h1>Cabeçalho CMS</h1>
      Bem vindo, <?php echo $nome_usuario ?>
    </header>

    <section>

        <div id="menu-cms">
            <ul>

                <li><a href="views/cms/cms_galeria_fotos.php">Gerenciar galeria de fotos</a></li>

            </ul>
        </div>

        <div id="conteudo-cms">

          <a href="sair.php"> sair </a><Br>

        </div>
    </section>
    <footer>
        <h1>rodape</h1>
    </footer>
</div>
