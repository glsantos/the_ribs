<!DOCTYPE html>
<html>
<!-- CHAMANDO HEAD -->
	<?php
		require_once('../head.php');
	?>
	<body>
		<section id="principal">
			 <section id="main">
				<!-- CHAMANDO MENU LATERAL -->
				  <?php
						require_once('componentes/menu.php');
					?>
				  <section id="conteudo">
						<!-- CHAMANDO CABECALHO -->
						<?php
							require_once('componentes/cabecalho.php');
						?>
						<!-- AQUI VAI O SEU CONTEUDO -->

            <div id="caixa">

                <div id="imagem">
                  <div id="img">
                    <img src="img/img2.jpg">
                  </div>

                  <div id="titulo">
                    <p><h1>Nos avalie</h1></p>
                    <p><h5>Dê-nos seu feedback</h5></p>
                  </div>
                </div>
                <div id="filtro_texto">
                    <div id="input_busca">
                        <input type="text" placeholder="Tente 'Steak Friday'..." name="txt_pesquisa" class="txt_pesquisa">
                        <input type="submit"  class="btn-pesquisar">
                    </div>
                </div>
                <div id="corpo">
                    <div id="avalie">
                      <div class="unidade">
                          <h1>Unidade</h1>
                          <h5>Jandira</h5>
                          <h5>Alphaville</h5>
                          <h5>Osasco</h5>


                      </div>
                      <div class="nota">
                        <h1>Nota</h1>
                        <h5>5.0</h5>
                        <h5>4.0</h5>
                        <h5>3.0</h5>
                        <h5>2.0</h5>
                        <h5>1.0</h5>
                      </div>
                      <div class="preco">
                        <h1>Preço</h1>
                        <div id="caixa_r">
                          <p><input type="radio" name="radio" value="um">Até R$ 11.00</p>
    											<p><input type="radio" name="radio" value="dois">Até R$ 25.00</p>
    											<p><input type="radio" name="radio" value="três">Até R$ 30.00</p>
                        </div>
                      </div>
                    </div>
                    <div id="produtos">
                        <div class="caixa-produto">
                            <div class="foto">
                              <img src="../img/cu.jpg">
                            </div>
                            <div class="titulo-prato">
                              <h1>Cuzcuz com Bife</h1>
                            </div>
                            <div class="nota_1">
                              <h1><small>Nota:</small> 5.0</h1>
                            </div>
                            <div class="nota_1">
                              <h1>R$ 15.00</h1>
                            </div>
                            <div class="descricao">
                                <p>1kg de cuzcuz</p>
                                  <p>1kg de cuzcuz</p>
                                    <p>2 ovo</p>
                            </div>
                            <div class="caixa-produto">
                                <div class="foto">
                                  <img src="../img/cu.jpg">
                                </div>
                                <div class="titulo-prato">
                                  <h1>Cuzcuz com Bife</h1>
                                </div>
                                <div class="nota_1">
                                  <h1><small>Nota:</small> 5.0</h1>
                                </div>
                                <div class="nota_1">
                                  <h1>R$ 15.00</h1>
                                </div>
                                <div class="descricao">
                                    <p>1kg de cuzcuz</p>
                                      <p>1kg de cuzcuz</p>
                                        <p>2 ovo</p>
                                </div>
                                <div class="caixa-produto">
                                    <div class="foto">
                                      <img src="../img/cu.jpg">
                                    </div>
                                    <div class="titulo-prato">
                                      <h1>Cuzcuz com Bife</h1>
                                    </div>
                                    <div class="nota_1">
                                      <h1><small>Nota:</small> 5.0</h1>
                                    </div>
                                    <div class="nota_1">
                                      <h1>R$ 15.00</h1>
                                    </div>
                                    <div class="descricao">
                                        <p>1kg de cuzcuz</p>
                                          <p>1kg de cuzcuz</p>
                                            <p>2 ovo</p>
                                    </div>
                                    <div class="caixa-produto">
                                        <div class="foto">
                                          <img src="../img/cu.jpg">
                                        </div>
                                        <div class="titulo-prato">
                                          <h1>Cuzcuz com Bife</h1>
                                        </div>
                                        <div class="nota_1">
                                          <h1><small>Nota:</small> 5.0</h1>
                                        </div>
                                        <div class="nota_1">
                                          <h1>R$ 15.00</h1>
                                        </div>
                                        <div class="descricao">
                                            <p>1kg de cuzcuz</p>
                                              <p>1kg de cuzcuz</p>
                                                <p>2 ovo</p>
                                        </div>
                                        <div class="caixa-produto">
                                            <div class="foto">
                                              <img src="../img/cu.jpg">
                                            </div>
                                            <div class="titulo-prato">
                                              <h1>Cuzcuz com Bife</h1>
                                            </div>
                                            <div class="nota_1">
                                              <h1><small>Nota:</small> 5.0</h1>
                                            </div>
                                            <div class="nota_1">
                                              <h1>R$ 15.00</h1>
                                            </div>
                                            <div class="descricao">
                                                <p>1kg de cuzcuz</p>
                                                  <p>1kg de cuzcuz</p>
                                                    <p>2 ovo</p>
                                            </div>
                                            <div class="caixa-produto">
                                                <div class="foto">
                                                  <img src="../img/cu.jpg">
                                                </div>
                                                <div class="titulo-prato">
                                                  <h1>Cuzcuz com Bife</h1>
                                                </div>
                                                <div class="nota_1">
                                                  <h1><small>Nota:</small> 5.0</h1>
                                                </div>
                                                <div class="nota_1">
                                                  <h1>R$ 15.00</h1>
                                                </div>
                                                <div class="descricao">
                                                    <p>1kg de cuzcuz</p>
                                                      <p>1kg de cuzcuz</p>
                                                        <p>2 ovo</p>
                                                </div>
                                                <div class="caixa-produto">
                                                    <div class="foto">
                                                      <img src="../img/cu.jpg">
                                                    </div>
                                                    <div class="titulo-prato">
                                                      <h1>Cuzcuz com Bife</h1>
                                                    </div>
                                                    <div class="nota_1">
                                                      <h1><small>Nota:</small> 5.0</h1>
                                                    </div>
                                                    <div class="nota_1">
                                                      <h1>R$ 15.00</h1>
                                                    </div>
                                                    <div class="descricao">
                                                        <p>1kg de cuzcuz</p>
                                                          <p>1kg de cuzcuz</p>
                                                            <p>2 ovo</p>
                                                    </div>
                                                    <div class="caixa-produto">
                                                        <div class="foto">
                                                          <img src="../img/cu.jpg">
                                                        </div>
                                                        <div class="titulo-prato">
                                                          <h1>Cuzcuz com Bife</h1>
                                                        </div>
                                                        <div class="nota_1">
                                                          <h1><small>Nota:</small> 5.0</h1>
                                                        </div>
                                                        <div class="nota_1">
                                                          <h1>R$ 15.00</h1>
                                                        </div>
                                                        <div class="descricao">
                                                            <p>1kg de cuzcuz</p>
                                                              <p>1kg de cuzcuz</p>
                                                                <p>2 ovo</p>
                                                        </div>
                                                        <var>  <div class="caixa-produto">
                                                              <div class="foto">
                                                                <img src="../img/cu.jpg">
                                                              </div>
                                                              <div class="titulo-prato">
                                                                <h1>Cuzcuz com Bife</h1>
                                                              </div>
                                                              <div class="nota_1">
                                                                <h1><small>Nota:</small> 5.0</h1>
                                                              </div>
                                                              <div class="nota_1">
                                                                <h1>R$ 15.00</h1>
                                                              </div>
                                                              <div class="descricao">
                                                                  <p>1kg de cuzcuz</p>
                                                                    <p>1kg de cuzcuz</p>
                                                                      <p>2 ovo</p>
                                                              </div>
                                                              <div class="caixa-produto">
                                                                  <div class="foto">
                                                                    <img src="../img/cu.jpg">
                                                                  </div>
                                                                  <div class="titulo-prato">
                                                                    <h1>Cuzcuz com Bife</h1>
                                                                  </div>
                                                                  <div class="nota_1">
                                                                    <h1><small>Nota:</small> 5.0</h1>
                                                                  </div>
                                                                  <div class="nota_1">
                                                                    <h1>R$ 15.00</h1>
                                                                  </div>
                                                                  <div class="descricao">
                                                                      <p>1kg de cuzcuz</p>
                                                                        <p>1kg de cuzcuz</p>
                                                                          <p>2 ovo</p>
                                                                  </div>
                                                                  <div class="caixa-produto">
                                                                      <div class="foto">
                                                                        <img src="../img/cu.jpg">
                                                                      </div>
                                                                      <div class="titulo-prato">
                                                                        <h1>Cuzcuz com Bife</h1>
                                                                      </div>
                                                                      <div class="nota_1">
                                                                        <h1><small>Nota:</small> 5.0</h1>
                                                                      </div>
                                                                      <div class="nota_1">
                                                                        <h1>R$ 15.00</h1>
                                                                      </div>
                                                                      <div class="descricao">
                                                                          <p>1kg de cuzcuz</p>
                                                                            <p>1kg de cuzcuz</p>
                                                                              <p>2 ovo</p>
                                                                      </div>
                                                                      <div class="caixa-produto">
                                                                          <div class="foto">
                                                                            <img src="../img/cu.jpg">
                                                                          </div>
                                                                          <div class="titulo-prato">
                                                                            <h1>Cuzcuz com Bife</h1>
                                                                          </div>
                                                                          <div class="nota_1">
                                                                            <h1><small>Nota:</small> 5.0</h1>
                                                                          </div>
                                                                          <div class="nota_1">
                                                                            <h1>R$ 15.00</h1>
                                                                          </div>
                                                                          <div class="descricao">
                                                                              <p>1kg de cuzcuz</p>
                                                                                <p>1kg de cuzcuz</p>
                                                                                  <p>2 ovo</p>
                                                                          </div>
                                                                        <var><var><var>
                                                                          <div class="caixa-produto">
                                                                              <div class="foto">
                                                                                <img src="../img/cu.jpg">
                                                                              </div>
                                                                              <div class="titulo-prato">
                                                                                <h1>Cuzcuz com Bife</h1>
                                                                              </div>
                                                                              <div class="nota_1">
                                                                                <h1><small>Nota:</small> 5.0</h1>
                                                                              </div>
                                                                              <div class="nota_1">
                                                                                <h1>R$ 15.00</h1>
                                                                              </div>
                                                                              <div class="descricao">
                                                                                  <p>1kg de cuzcuz</p>
                                                                                    <p>1kg de cuzcuz</p>
                                                                                      <p>2 ovo</p>
                                                                              </div>
                                                                              <div class="caixa-produto">
                                                                                  <div class="foto">
                                                                                    <img src="../img/cu.jpg">
                                                                                  </div>
                                                                                  <div class="titulo-prato">
                                                                                    <h1>Cuzcuz com Bife</h1>
                                                                                  </div>
                                                                                  <div class="nota_1">
                                                                                    <h1><small>Nota:</small> 5.0</h1>
                                                                                  </div>
                                                                                  <div class="nota_1">
                                                                                    <h1>R$ 15.00</h1>
                                                                                  </div>
                                                                                  <div class="descricao">
                                                                                      <p>1kg de cuzcuz</p>
                                                                                        <p>1kg de cuzcuz</p>
                                                                                          <p>2 ovo</p>
                                                                                  </div>
                                                                                <var><var>  <div class="caixa-produto">
                                                                                      <div class="foto">
                                                                                        <img src="../img/cu.jpg">
                                                                                      </div>
                                                                                      <div class="titulo-prato">
                                                                                        <h1>Cuzcuz com Bife</h1>
                                                                                      </div>
                                                                                      <div class="nota_1">
                                                                                        <h1><small>Nota:</small> 5.0</h1>
                                                                                      </div>
                                                                                      <div class="nota_1">
                                                                                        <h1>R$ 15.00</h1>
                                                                                      </div>
                                                                                      <div class="descricao">
                                                                                          <p>1kg de cuzcuz</p>
                                                                                            <p>1kg de cuzcuz</p>
                                                                                              <p>2 ovo</p>
                                                                                      </div></var></var></var></var></var></var>
                        </div>

                        </div>
                    </div>

                </div>
            </div>

  					 <?php
  						require_once('componentes/rodape.php');
  					?>

				  </section>
			</section>
		</section>
	</body>
</html>
