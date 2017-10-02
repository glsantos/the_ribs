<!--
    **************************************************************
    *Objetivo: VIEW DA PAGINA DE GERENCIAMENTO DA GALERIA DE FOTOS
    *Autor: Marcos
    *Data: 28/09/2017
    *Ultima Modificação:  30/09/2017
    *Modificações:
    *Arquivos relacionados:
    *                       router.php
    *                       controllers/controller_galeria.php
    **************************************************************
-->
<?php
      $modo="";
      $nome_unidade="";
      $imagem_unidade="";
      $id_foto="";
      $id_unidade="";
      $action="salvar";
      $idEditar="";

      if (isset($_GET["modo"])=='alterar') {
          $id_foto=$listGaleria->id_foto;
          $nome_unidade=$listGaleria->nome_unidade;
          $imagem_unidade=$listGaleria->imagem_unidade;
          $id_unidade=$listGaleria->id_unidade;
          $action="editar";
          $idEditar="&id=".$id_foto;
      }

?>

<div id="container-cms">

    <?php require_once('views/cms/header.php'); ?>

    <section>

        <?php require_once('views/cms/menu.php'); ?>

        <div id="conteudo-cms">

          <form method="post" name="frmgaleria" action="../../router.php?controller=controller_galeria&modo=salvar" enctype="multipart/form-data">
          <section id="conteudo-galeria">
            <div id="caixa-ver-imagem">
              aqui vai a foto
            </div>
                    <div id="caixa-inputs">

                      <div id="unidade">
                          <select name="sltunidade">

                      <?php
                          if($modo=="alterar"){
                       ?>

                          <option value="<?php echo($id_unidade)?>" selected><?php echo($nome_unidade)?></option>

                       <?php

                          }else{

                        ?>
                          <option value="" selected>Escolha uma unidade</option>

                          <?php

                             }

                           ?>
                        <?php
                            //incluindo o arquivo da controller para fazer o select
                            require_once('controllers/controller_galeria.php');

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
                    <p>Escolha a foto da unidade<input type="file" name="flefotos" value="<?php $imagem_unidade ?>"></p>



                      <input type='submit' autofocus required name="btnimagem">


                    </div>

                    <div id="consulta">
                   <table id="tblconsulta" border="1" colspan="5">
                       <tr>
                         <td colspan="5" class="titulo_tabela">Consulta da Galeria de fotos</td>
                       </tr>
                       <tr>
                         <td class="tblcadastro_td">Unidade</td>
                         <td class="tblcadastro_td">Imagem</td>
                         <td class="tblcadastro_td">Opções</td>
                       </tr>
                       <?php
                       //incluindo o arquivo da controller para fazer o select
                       require_once('../../controllers/controller_galeria.php');

                        //Instancia do objeto da controller
                       $controller_galeria = new ControllerGaleria();

                        //chamada para o metodo de listar as unidades
                        $rsImagens=$controller_galeria->ListarImagens();

                        $cont=0;
                        while ($cont<count($rsImagens)){
                      ?>
                      <tr>

                         <td class="tblcadastro_td"><?php echo($rsImagens[$cont]->nome_unidade) ?></td>
                          <td class="tblcadastro_td">
                  <?php echo($rsImagens[$cont]->imagem_unidade) ?>
                  <img <?php echo("src = '".$rsImagens[$cont]->imagem_unidade."'") ?>>
                  </td>

                          <td class="tblcadastro_td"><a href="router.php?controller=controller_galeria&modo=apagar&id=<?php echo($rsImagens[$cont]->id_foto)?>">excluir</a></td>
                          <td class="tblcadastro_td"><a href="router.php?controller=controller_galeria&modo=alterar&id=<?php echo($rsImagens[$cont]->id_foto)?>">editar</a></td></a></td>
                          <td class="tblcadastro_td"></a></td>
                       </tr>

                       <?php
                           $cont+=1;
                           }
                        ?>

                     </table>

                 </div>

                  </section>
                </form>

        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
