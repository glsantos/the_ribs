
<?php

session_start();

     @$id="";
     @$missao="";
     @$valores="";
     @$objetivo="";
     @$historia="";
     @$fraseEfeito="";
    @ $imagemEfeito="";
    @ $imagemHistoria="";
     @ $action="salvar_sobre";
    @$idEditar="";

      if (isset($_GET["modo"])=='alterar') {
          @$id=$list->id;
          @$missao=$list->valores;
          @$objetivo=$list->objetivo;
          @$historia=$list->historia;
          @$valores=$list->valores;
          @$fraseEfeito=$list->fraseEfeito;
          @$imagemHistoria=$list->imagemHistoria;
          @$imagemEfeito=$list->imagemEfeito;
          $action="editar";
          $idEditar="&id=".$id;    
      }



    
?>

<div id="container-cms">

    <?php require_once('header.php'); ?>
        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">

          <form method="post" name="frmsobre" action="router.php?controller=controller_sobre&modo=<?php echo($action); echo($idEditar); ?>" enctype="multipart/form-data" id="frmsobre">
              
                  <p><label>Frase de efeito:</label></p>
                  <p><input type="text" placeholder="Frase de efeito da pagina:"
                    name="txtefeito" value="<?php echo $fraseEfeito?>"></p>
                  <p><label>imagem de efeito:</label></p>
                  <p>
                    <input type="file" name="fleimagemdeEfeito">
                  </p>
                      <p>
                         <label>imagem de efeito do modelo:</label>
                            <div class="mostrar-imagem-sobre-2">
                                           <img <?php echo("src = '".$imagemEfeito."'") ?>>
                            </div>

                    </p>
                  <p><label>Escreva uma texto para a area de missão:</label></p>
                  <p><input type="text" name="txtmissao" placeholder="Nossa missão é:" value="<?php echo $missao?>"></p> 
                  <p><label>Escreva uma texto para a area de Valores:</label></p> 
                  <p><input type="text" name="txtvalores" value="<?php echo $valores ?>" placeholder="Nossos valores são:"></p>  
                  <p><label>Escreva uma texto para a area de Objetivo:</label></p>
                  <p><input type="text" name="txtobjetivo" placeholder="Nosso objetivo é:" value="<?php echo $objetivo?>"></p>  
                  <p><label>Escreva uma texto para a Historia da empresa:</label></p>
                  <p><input type="text" name="txthistoria" placeholder="A the Ribs foi fundada...:" value="<?php  echo $historia ?>"></p>  
                   <p><label>imagem de fundo historia:</label></p>
                  <p>
                    <input type="file" name="fleimagemHistoria">
                  </p>
                  <p> 
                     <label>imagem de efeito do modelo:</label>
                    <div class="mostrar-imagem-sobre">
                           <img <?php echo("src = '".$imagemHistoria."'") ?>>
                    </div>
                  </p>
              
                    
                  <p>
                     <input class="btn-salvar-cms" type="submit" value="salvar modelo">       
                  </p>
                  
                
             
             
            </form>
            <div id="consulta-sobre">
                <table  id="table-consulta" cellspacing="30">
                    <th>Frase efeito</th>
                    <th>Imagem Efeito</th>
                    <th>Missão</th>
                    <th>Valores</th>
                    <th>Objetivo</th>
                    <th>Historia</th>
                    <th>Imagem Historia</th>
                    
                     <?php
                       
                       require_once('controllers/controller_sobre.php');

                        
                       $controller_sobre = new ControllerSobre();

                      $rs=$controller_sobre->ListarRegistros();

                        $cont=0;
                        while ($cont<count($rs)){
                      ?>
                    <tr>
                          <td><?php echo $rs[$cont]->fraseEfeito ?></td>
                          <td class="reduzirImagem"><img  <?php echo("src = '".$rs[$cont]->imagemEfeito."'") ?>></td>
                          <td><?php  echo $rs[$cont]->missao ?></td>
                          <td><?php  echo $rs[$cont]->valores ?></td>
                          <td><?php  echo $rs[$cont]->objetivo ?></td>
                          <td><?php  echo $rs[$cont]->historia ?></td>
                          <td class="reduzirImagem"><img  <?php echo("src = '".$rs[$cont]->imagemHistoria."'") ?>></td>
                          <td><a href="router.php?controller=controller_sobre&modo=alterar&id=<?php echo($rs[$cont]->id)?>">Editar</a></td>
                          <td><a href="router.php?controller=controller_sobre&modo=apagar&id=<?php echo($rs[$cont]->id)?>">Apagar</a></td>      
                          <td><a href="router.php?controller=controller_sobre&modo=ativar&id=<?php echo($rs[$cont]->id)?>">Ativar</a></td>
                          <td><a href="router.php?controller=controller_sobre&modo=desativar&id=<?php echo($rs[$cont]->id)?>">Desativar</a></td>
                           <td>
                                  <?php
								if($rs[$cont]->status==1){
									echo('Item ativado');
								}else{
									echo('Item desativado');
								}
							?>
                           </td>
                    </tr>
                    <?php
                        $cont+=1;
                        }
                    ?>
                    
                </table>
                
            
            </div>
        </div>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>
</div>
