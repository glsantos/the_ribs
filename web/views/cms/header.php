<header>

  <div class="esquerda_cabecalho">

    <img src="img/logo_cms2.png" alt="Imagem Logo"/>

    <?php $nome_maiusculo = strtoupper($nome_usuario = $_SESSION['nome']); ?>

    <div class="titulo_cms"> Bem vindo, <?php  echo($nome_maiusculo."!"); ?> </div>

  </div>

  <div class="direita_cabecalho">

    <a href="sair.php">
      <figure class="img_sair_cms">
         <img src="img/saircarai.png" alt="SAIR" title="Sair"/>
         <figcaption>Sair</figcaption>
      </figure>
    </a>

  </div>

</header>
