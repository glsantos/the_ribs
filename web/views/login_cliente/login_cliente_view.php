<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilo_login.css">
  </head>
  <body>
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
