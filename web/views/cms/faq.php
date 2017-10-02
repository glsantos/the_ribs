<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ - CMS</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilo_cms_faq.css">
  </head>
  <body>
    <section id="principal">
        <form name="frm_faq" action="../../router.php?controller=controller_faq&modo=salvar" method="post">
          <section class="formulario">
              Pergunta<input type="text" name="frm_pergunta" value="">
              Respota<input type="text" name="frm_resposta" value="">
              <input type="submit" name="btn_faq">
          </section>
        </form>
    </section>
  </body>
</html>
