<?php
    session_start();

    $pergunta="";
    $resposta="";
    $status="0";
    $action="salvar";

    if(isset($_GET['modo'])){

        if($_GET['modo'] == 'alterar'){

            $id_faq=$list->id_faq;
            $pergunta=$list->pergunta;
            $resposta=$list->resposta;
            $status=$list->status;

            $action="editar&id_faq=".$id_faq;

        }
    }

 ?>
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

        <section id="principal">
              <form name="frm_faq" action="router.php?controller=controller_faq&modo=<?php echo($action);?>" method="post">
                <div class="formulario">
                    Pergunta<input type="text" name="txt_pergunta" value="<?php echo($pergunta);?>"><br>
                    Respota<input type="text" name="txt_resposta" value="<?php echo($resposta);?>"><br>
                      <input type="radio" name="slt_status" value="0" >Desativada</option>
                      <input type="radio" name="slt_status" value="1" >Ativada</option>
                    <input type="submit" name="btn_faq">
                </div>
              </form>
              <div class="consulta_faq">
                <div class="titulo_consulta">
                    FAQ's Cadastrados
                </div>
                <div class="faq_consulta">
                    <table class="tabela_faq_consulta">
                        <tr>
                          <td class="titulo_tabela_faq_consulta">Pergunta</td>
                          <td class="titulo_tabela_faq_consulta">Disponivel</td>
                          <td class="titulo_tabela_faq_consulta">Opção</td>
                        </tr>

                          <?php

                              require_once('controllers/controller_faq.php');

                              $controller_Faq = new ControllerFaq();

                              $rsFaq = $controller_Faq->Listar();

                              $cont=0;

                              while($cont<count($rsFaq)){
                           ?>
                        <tr>
                          <td><?php  echo($rsFaq[$cont]->pergunta)?></td>
                          <td><?php  echo($rsFaq[$cont]->status)?></td>
                          <td>
                            <a href="router.php?controller=controller_faq&modo=alterar&id_faq=<?php echo($rsFaq[$cont]->id_faq)?>">
                                Visualizar
                            </a>
                              |
                            <a href="router.php?controller=controller_faq&modo=apagar&id_faq=<?php echo($rsFaq[$cont]->id_faq)?>">
                              Excluir
                            </a>
                          </td>
                        </tr>
                        <?php
                              $cont+=1;
                            }
                         ?>
                    </table>
                </div>
              </div>
        </section>

    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
