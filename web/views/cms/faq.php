<?php
    session_start();

    $pergunta="";
    $resposta="";
    $status="0";
    $nome_status="Desativada";

    if(isset($_GET['modo'])){

        if($_GET['modo'] == 'alterar'){

            $id_faq=$list->id_faq;
            $pergunta=$list->pergunta;
            $resposta=$list->resposta;
            $status=$list->status;

            if($status=$list->status=1){
                $nome_status="Ativada";
            }else{
              $nome_status="Desativada";
            }
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
              <form name="frm_faq" action="router.php?controller=controller_faq&modo=salvar" method="post">
                <div class="formulario">
                    Pergunta<input type="text" name="txt_pergunta" value="<?php echo($pergunta);?>"><br>
                    Respota<input type="text" name="txt_resposta" value="<?php echo($resposta);?>"><br>
                    Status:<select name="slt_status">
                      <option value="<?php echo($status);?>" selected=""><?php echo($nome_status); ?></option>
                      <option value="1">Ativada</option>
                    </select>
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
