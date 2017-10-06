
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ - CMS</title>
    <link rel="stylesheet" type="text/css" href="css/estilo_cms_faq.css">
  </head>
  <body>

<div id="container-cms">
    <?php require_once('header.php'); ?>

    <section>
        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">
          <section id="principal">
              <form name="frm_faq" action="router.php?controller=controller_faq&modo=salvar" method="post">
                <div class="formulario">
                    Pergunta<input type="text" name="txt_pergunta" value=""><br>
                    Respota<input type="text" name="txt_resposta" value=""><br>
                    Status:<select name="slt_status">
                      <option value="0" selected="">Desativada</option>
                      <option value="1">Ativada</option>
                    </select>
                    <input type="submit" name="btn_faq">
                </div>
              </form>
              <div class="">
                <?php //TODO ?>
              </div>
          </section>
        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
