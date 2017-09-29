<?php


      $action="salvar";

 ?>



<!--
    **************************************************************
    *Objetivo: VIEW DA PAGINA DE GERENCIAMENTO DA GALERIA DE FOTOS
    *Autor: Marcos
    *Data: 28/09/2017
    *Ultima Modificação:  28/09/2017
    *Modificações:
    *Arquivos relacionados:
    *                       router.php
    *                       controllers/controller_galeria.php
    **************************************************************


-->



<form method="post" name="frmgaleria" action="router.php?controller=controller_galeria&modo=<?php echo($action); echo($idEditar); ?>">
<section id="conteudo-galeria">

          <div id="foto">
          </div>
          <div id="caixa-inputs">
            <div id="unidade">
                <select name="sltunidade">
                <option value="" selected>Escolha uma unidade</option>

            <?php
 								//incluindo o arquivo da controller para fazer o select
 								require_once('../../controllers/controller_galeria.php');

                 //Instancia do objeto da controller
 								$controller_galeria = new ControllerGaleria();

                 //chamada para o metodo de listar as unidades
                 $rsUnidades=$controller_galeria->ListarUnidades();

                 $cont=0;
                 while ($cont<count($rsUnidades)) {
              ?>

                  <option value="<?php echo $rsUnidades[$cont]->id?>">

                    <?php echo $rsUnidades[$cont]->nome_unidade ?>

                  </option>



              <?php
                  $cont+=1;
                  }
               ?>
                  </select>
                </div>
          </div>







          <div id="escolha">
          <p>Escolha a foto da unidade<input type="file" name="flefotos"></p>
            <input type='submit' autofocus required name="btnimagem" value="Salvar imagem">
          </div>

          <div id="caixa-ver-imagem">
          </div>

        </section>
