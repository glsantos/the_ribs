<section id="principal">
			 <section id="main">
				<!-- CHAMANDO MENU LATERAL -->

    <section id="conteudo">

						<!-- AQUI VAI O SEU CONTEUDO -->
            <div class="principal_galeria">
                <div class="primeira_faixa">
                    <div class="selecao_unidade">
                      <div class="filtre_unidade">
                        <a>Filtre por Unidade</a>
                      </div>
                      <div class="busque_unidade">
                      <form type="post" name="frmselectunidade" id="frmselectunidade" action="router.php?controller=controller_pagina_galeria&modo=PreencherPaginaComDadosDoBanco">
                     <select class="cbo_unidade" name="cbo_unidade"> 
                         <option value="#" selected>Selecione algum restaurante
                         </option>
                     <?php
                       require_once('controllers/controller_view_galeria.php');

                        
                       $controller_view_galeria = new ControllerViewGaleria();

                    
                        $rsUnidades=$controller_view_galeria->ListarUnidades();

                        $cont=0;
                        while ($cont<count($rsUnidades)){
                      ?> 
                         <option value="<?php echo $rsUnidades[$cont]->id?>">
                             <?php echo $rsUnidades[$cont]->nome_unidade?>
                         </option>
                     <?php
                        $cont+=1;
                        }
                    ?>
                        <div class="btn_buscar">
                          <input type="submit" name="btn_buscar_unidade" value="BUSCAR">
                        </div>
                      </form>
                       
                        
                      </div>
                    </div>
                </div>
                <div class="segunda_faixa">
                    <div class="espaco_fotos_unidades">
                        <div class="linha_imagem">
                          <div class="img_unidade">
                             <ul class="demo-3">
                                <li>
                                    <figure>
                                        <img src="img/img-restaurante-1.jpg" alt=""/>
                                        <figcaption>
                                            <div class="titulo-galeria">Restaurante Jandira</div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                          </div>
                          <div class="img_unidade">
                              <ul class="demo-3">
                                <li>
                                    <figure>
                                        <img src="img/img-restaurante-1.jpg" alt=""/>
                                        <figcaption>
                                            <div class="titulo-galeria">Restaurante Jandira</div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                          </div>
                          <div class="img_unidade">
                                <ul class="demo-3">
                                <li>
                                    <figure>
                                        <img src="img/img-restaurante-1.jpg" alt=""/>
                                        <figcaption>
                                            <div class="titulo-galeria">Restaurante Jandira</div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
      </section>
    </section>
