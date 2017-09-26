<?php
sleep(2);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sistema Gerenciador do Site</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo_galeria_principal_cms.css">
  </head>
  <body>

        <section id="conteudo-galeria">

          <div id="foto">
          </div>
          <div id="caixa-inputs">
            <div id="unidade">
                <select name="sltunidade">
                  <option value="" selected>Escolha uma unidade</option>
                </select>
            </div>
            <div id="titulo-imagem">
                nome da imagem
                <input type='text' autofocus required name="txtimagem">

            </div>
          </div>
          <div id="escolha">
          <p>Escolha a foto da unidade<input type="file" name="flefotos"></p>
            <input type='submit' autofocus required name="btnimagem" value="Salvar imagem">
          </div>

          <div id="caixa-ver-imagem">
          </div>

        </section>



  </body>
</html>
