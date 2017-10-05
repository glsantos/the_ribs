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

      $id="";
      $enquete="";
      $action="novo";

      if (isset($_GET['modo']))
{
    if($_GET['modo']=='alterar')
    {
        $id_enquete=$list->id_enquete;
        $enquete=$list->enquete;
        $action="editar&id=".$codigo;

    }
}

?>

<div id="container-cms">

    <?php require_once('header.php'); ?>

    <section>

        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">
          <section>
              <div class="">
                <form action="router.php?controller=controller_enquete&modo=<?php echo($action);?>" method="post">
                    <tr>
                      <td>Escreva sua nova pergunta:</td>
                      <td><input type="text" name="txt_pergunta_enquete" value=""></td>
                    </tr>
                    <!-- -->
                    <tr>
                      <td>
                        <input type="submit" name="btnsalvar" value="Salvar">
                      </td>
                    </tr>
                </form>
              </div>
              <div class="div_table_resultados_cms_enquete">
                <table>
                  <?php
                      require_once('controllers/controller_enquete.php');

                      $controllerEnquete = new ControllerEnquete();
                      $cont = 0;
                      $rsEnquete = $controllerEnquete->Listar();
                      while($cont<count($rsEnquete)){
                   ?>
                  <tr>
                    <td>Enquete</td>
                  </tr>
                  <tr>
                    <td><?php echo($rsEnquete[$cont]->enquete);?></td>
                  </tr>
                    <?php
                      $cont+=1;
                        }
                     ?>
                     <tr>
                       <td><a href="router.php?controller=controller_enquete&modo=editar">Editar</a></td>
                       <td><a href="router.php?controller_enquete&modo=ecluir&id=<?php echo($rsEnquete[$cont]->id_enquete)?>">Excluir</a></td>
                     </tr>
                </table>
              </div>
          </section>
        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
<!-- <tr>
  <td>Status:</td>
  <td><select class="" name="select_status">
          <option value="1">ON</option>
          <option value="0">OFF</option>
      </select>
  </td>
</tr> -->
