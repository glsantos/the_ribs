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
      $nome_processo="";
      $id_processo_home="";
      $imagem_valores="";
      $id_titulo="";
      $nome_processo2="";
     

      $action="salvar";
      $idEditar="";

      if (isset($_GET["modo"])=='alterar') {

         
          @$id_processo_home=$listPassos->codigo_passo;
          @$passoum=$listPassos->passoum;
          @$passodois=$listPassos->passodois;
          @$passotres=$listPassos->passotres;
          @$passoquatro=$listPassos->passoquatro;
          @$nome_processo=$listPassos->nome_processo;
          $action="editar";
          $idEditar="&id=".$id_processo_home;
          
         
      }


        if (isset($_GET["modo"])=='alterar_dois') {

         
          @$id_titulo_home=$listHome->id_titulo;
          @$imagem_valores=$listHome->imagem_valores;
          $action_dois="editar";
          $idEditar_dois="&id=".$id_titulo;
          
         
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
              <p><input type="text" placeholder="Titulo Para esse Passo a Passo de Reserva" name="nome_processo" value="<?php  echo($nome_processo) ?>"></p>
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
                <td class="tblcadastro_td">Titulo</td>
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
                         <td class="tblcadastro_td"><?php echo($rsPassos[$cont]->nome_processo) ?></td>    
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
               </form> 
            
              
           <form method="post" name="frmhome"  action="router.php?controller=controller_home&modo=<?php echo($action_dois); echo($idEditar_dois); ?>" enctype="multipart/form-data">     
            <div id="div-home-gerenciar">
                <div id="foto-valores">
                     <img <?php echo("src = '".$imagem_valores."'") ?>>
                </div>  
                        
                
                
                
                
                
                
                     <select name="slttitulos">
                        <option value="" selected>
                            Escolha um titulo
                        </option>
                             
                       <?php
                          if($modo=="alterar"){
                       ?>

                          <option value="<?php echo($id_processo_home)?>" selected><?php echo($nome_processo2)?></option>

                       <?php

                          }else{

                        ?>
                          <option value="" selected>Escolha um titulo</option>

                        <?php

                             }

                         ?>          
                        <?php
                          
                            require_once('controllers/controller_home.php');

                             
                            $controller_home= new ControllerHome();

                            
                             $rs=$controller_home->SelecionarTitulos();

                             $cont=0;
                             while ($cont<count($rs)) {
                          ?>

                              <option value="<?php echo $rs[$cont]->id_titulo?>">
                                    
                                <?php echo $rs[$cont]->nome_processo ?>

                              </option>



                          <?php
                              $cont+=1;
                              }
                           ?>

                    </select>
                          
             
            
                   <p>Escolha a foto da faixa de valores<input type="file" name="flefotos"></p>
                   <p><input class="btn-salvar-home" type="submit" value="Salvar"></p> 
                
                     <p><div id="consulta-frases">
        	<table id="tblconsulta">
              <tr>
                <td colspan="5" class="titulo_tabela">Consulta de Passos Cadastrados</td>
              </tr>
			 <tr>
                <td class="tblcadastro_td">Titulo</td>
                <td class="tblcadastro_td">Primeiro passo</td>
             </tr>
                <?php

                    require_once('controllers/controller_home.php');


                    $controller_home = new ControllerHome();


                    $rs=$controller_home->ListarEdicao();

                    $cont=0;

                    while($cont<count($rs)){

                    ?>
                     <tr>
                         <td class="tblcadastro_td"><?php echo($rs[$cont]->nome_processo) ?></td>    
                         <td class="tblcadastro_td"><?php echo($rs[$cont]->imagem_valores) ?></td>
                         <td class="tblcadastro_td">
                             <a href="router.php?controller=controller_home&modo=alterar_dois&id=<?php echo($rs[$cont]->id_home) ?>">
                             Editar
                             </a>
                             |
                             <a href="router.php?controller=controller_home&modo=excluir_dois&id=<?php echo($rs[$cont]->id_home) ?>">Excluir</a>
                         </td>
                      </tr>
                  <?php
                       $cont+=1;
                    }
                  ?>
            </table>

        </div></p>
            </div>      

            </form>

            </section>
        

        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
