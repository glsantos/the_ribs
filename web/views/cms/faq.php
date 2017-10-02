<div id="container-cms">

    <?php require_once('header.php'); ?>

    <section>

        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">

          <form name="frm_faq" action="../../router.php?controller=controller_faq&modo=salvar" method="post">
            <section class="formulario">
                Pergunta<input type="text" name="frm_pergunta" value="">
                Respota<input type="text" name="frm_resposta" value="">
                <input type="submit" name="btn_faq">
            </section>
          </form>

        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
