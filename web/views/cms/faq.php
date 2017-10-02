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
              Pergunta<input type="text" name="txt_pergunta" value="">
              Respota<input type="text" name="txt_resposta" value="">
              <select name="slt_status">
                <option value="0" selected="">Desativada</option>
                <option value="1">Ativada</option>
              </select>
              <input type="submit" name="btn_faq">
          </section>
        </form>
    </section>
  </body>
</html>
