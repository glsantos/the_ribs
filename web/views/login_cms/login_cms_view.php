<section class="section_login">

  <div id="titulo_login_cms"> <h1> LOGIN CMS </h1> </div>

  <div class="form_login">

    <form name="frmcms" method="post" action="router.php?controller=cms&modo=autenticacao_cms">

        <div class="titulos_login">
            Nome de usuário
        </div>

        <div class="input_login">

          <input type="text" name="txtlogin" required placeholder="Digite seu nome">

        </div>

        <div class="titulos_login">
            Senha
        </div>

        <div class="input_login">

          <input type="password" name="txtsenha" required placeholder="Digite sua senha">

        </div>

        <div class="div_botoes_login">

          <div class="input_botao">

            <input type="submit" value="Entrar">

          </div>

        </div>

    </form>

  </div>

</section>
