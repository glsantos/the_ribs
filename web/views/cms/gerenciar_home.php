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

      session_start();

      $modo="";
      $passoum="";
      $passodois="";
      $passotres="";
      $passoquatro="";

      $id_processo_home="";

      $action="salvar";
      $idEditar="";

      if (isset($_GET["modo"])=='alterar') {

          @$modo = "alterar";
          @$id_processo_home=$listPassos->codigo_passo;
          @$passoum=$listPassos->passoum;
          @$passodois=$listPassos->passodois;
          @$passotres=$listPassos->passotres;
          @$passoquatro=$listPassos->passoquatro;

          $action="editar";
          $idEditar="&id=".$id_processo_home;
      }

?>

<div id="container-cms">

    <?php require_once('header.php'); ?>

    <section>

        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">

          <form method="post" name="frmhome" action="router.php?controller=controller_home&modo=<?php echo($action); echo($idEditar); ?>" enctype="multipart/form-data">
            <section id="conteudo-home-cms">
                <h1>Editar Faixa De Passo a Passo de como fazer reserva </h1>
                <p><input type="text" placeholder="Primeiro passo" name="txtpassoum" value="<?php  echo($passoum) ?>"></p>
                <p><input type="text" placeholder="Segundo passo" name="txtpassodois" value="<?php  echo($passodois) ?>"></p>
                <p><input type="text" placeholder="Terceiro passo" name="txtpassotres" value="<?php  echo($passotres) ?>"></p>
                <p><input type="text" placeholder="Quarto passo" name="txtpassoquatro" value="<?php  echo($passoquatro) ?>"></p>

                <p><input type="submit" value="Enviar Passo a Passo"></p>



        <p><div id="consulta-frases">
        	<table id="tblconsulta">
              <tr>
                <td colspan="5" class="titulo_tabela">Consulta de Passos Cadastrados</td>
              </tr>
			          <tr>
                <td class="tblcadastro_td">Primeiro passo</td>
                <td class="tblcadastro_td">Segundo passo</td>
                <td class="tblcadastro_td">Terceiro passo</td>
                <td class="tblcadastro_td">Quarto passo</td>
              </tr>
                <?php

                    require_once('controllers/controller_home.php');


                    $controller_home = new ControllerHome();


                    $rsPassos=$controller_home->Listar();

                    $cont=0;

                    while($cont<count($rsPassos)){

                    ?>
                     <tr>
                        <td class="tblcadastro_td"><?php echo($rsPassos[$cont]->passoum) ?></td>
                        <td class="tblcadastro_td"><?php echo($rsPassos[$cont]->passodois) ?></td>
                        <td class="tblcadastro_td"><?php echo($rsPassos[$cont]->passotres) ?></td>
                        <td class="tblcadastro_td"><?php echo($rsPassos[$cont]->passoquatro) ?></td>
                         <td class="tblcadastro_td">
                             <a href="router.php?controller=controller_home&modo=alterar&id=<?php echo($rsPassos[$cont]->codigo_passo) ?>">
                             Editar
                             </a>
                             |
                             <a href="router.php?controller=controller_home&modo=excluir&id=<?php echo($rsPassos[$cont]->codigo_passo) ?>">Excluir</a></td>
                      </tr>
                  <?php
                       $cont+=1;
                    }
                  ?>
            </table>

        </div></p>




            </section>
          </form>

        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
