
<?php

session_start();
    
?>

<div id="container-cms">

    <?php require_once('header.php'); ?>
        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">

          <form method="post" name="frmsobre" action="router.php?controller=controller_sobre&modo=salvar_sobre" enctype="multipart/form-data" id="frmsobre">
              
                  <p><label>Frase de efeito:</label></p>
                  <p><input type="text" placeholder="Frase de efeito da pagina:"
                    name="txtefeito"></p>
                  <p><label>imagem de efeito:</label></p>
                  <p>
                    <input type="file" name="fleimagemdeEfeito">
                  </p>
                  <p><label>Escreva uma texto para a area de missão:</label></p>
                  <p><input type="text" name="txtmissao" placeholder="Nossa missão é:"></p> 
                  <p><label>Escreva uma texto para a area de Valores:</label></p>
                  <p><input type="text" name="txtvalores" placeholder="Nossos valores são:"></p>  
                  <p><label>Escreva uma texto para a area de Objetivo:</label></p>
                  <p><input type="text" name="txtobjetivo" placeholder="Nosso objetivo é:"></p>  
                   
                  
                  
                  <p><label>Escreva uma texto para a Historia da empresa:</label></p>
                  <p><input type="text" name="txthistoria" placeholder="A the Ribs foi fundada...:"></p>  
                   <p><label>imagem de fundo historia:</label></p>
                  <p>
                    <input type="file" name="fleimagemHistoria">
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
                          <td class="reduzirImagem"><img  <?php echo("src = '".$rs[$cont]->imagemEfeito."'") ?>></td>
                          <td>Editar</td>
                          <td>Apagar</td>      
                          <td>Ativar</td>
                          <td>Desativar</td>
                          <td>Ativado</td>
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
