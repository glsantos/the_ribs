<!DOCTYPE html>
<head>
  <title>The Ribs - SteakHouse </title>
  <link rel="stylesheet" type="text/css" href="../css/estilo_galeria_fotos.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../css/estilo_login.css">
  <link rel="stylesheet" type="text/css" href="../css/estilo_cadastro.css">
  <link rel="icon" href="img/logo_folha.png">
  <link rel="icon" href="../img/logo_folha.png">

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="js/script_menu_lateral.js"></script>
  <script type="text/javascript" src="../js/script_menu_lateral.js"></script>
  <script type="text/javascript" src="js/script_menu_fixo.js"></script>
  <script type="text/javascript" src="../js/script_menu_fixo.js"></script>
  <script type="text/javascript" src="js/tabs.js"></script>
  <script type="text/javascript" src="../js/tabs.js"></script>
  <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
  <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
  <script type="text/javascript" src="js/script-slide-show.js"></script>
  <script type="text/javascript" src="../js/script-slide-show.js"></script>
  <script type="text/javascript" src="js/jcarousellite.js"></script>
  <script type="text/javascript" src="../js/jcarousellite.js"></script>
</head>

  <body>

    <?php
      require_once('componentes/menu.php');
    ?>

    <header id="cabecalho">
            <div id="img-menu">
              <a href="#" class="toggle-nav btn-nav"><img src="../img/menu_icon.png" title="MENU" alt="Menu"></a>
            </div>
            <div id="logo">
              <img src="../img/logo.png" alt="Logo">
            </div>
    </header>
    <section class="section_login">

      <div class="form_login">

        <form action="router.php?controller=cliente&modo=logar" method="post">

            <div class="titulos_login">
                Nome de usuário
            </div>

            <div class="input_login">

              <input type="text" name="txtnome" placeholder="" required>

            </div>

            <div class="titulos_login">
                Senha
            </div>

            <div class="input_login">

              <input type="password" name="txtsenha" placeholder="" required>

            </div>

            <div class="div_botoes_login">

              <div class="input_botao">

                <input title="Entrar" type="submit" name="btnentrar" value="Entrar" placeholder="" required>

                <span class="txt_entre_botao_login"> ou </span>

                <a href="cadastro_cliente.php" title="Cadastrar-se">
                    <input type="button" name="btncadastrar" value="Tornar-se um Ribs" placeholder="" required>
                </a>

              </div>

            </div>

        </form>

      </div>

    </section>

  </body>
</html>
