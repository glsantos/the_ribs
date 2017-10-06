<section id="principal">
			 <section id="main">

				  <section id="conteudo">

						<!-- AQUI VAI O SEU CONTEUDO -->
							<div class="titulo_faixa_padrao">Entre em contato</div>
							<div id="corpo-contato">
								<img src="img/fundo-entre.jpg" alt="">
								<div id="caixa-contato">

									<div class="content-form">
											<form name="frmformulario" class="frmformulario" method="post" action="router.php?controller=contato_cliente">
													<div id="nucleo">

															<input required type="text" class="txt" name="txtnome" placeholder="Nome">
															<input required type="text" class="txt" name="txttelefone" placeholder="Telefone">
															<input required type="text" class="txt" name="txtemail"  placeholder="Email">

															<Br>

															<select class="option_entre_em_contato" name="select_id_classificacao">

																<option value="sugestao"> Sugestão </option>
																<option value="elogio" selected> Elogio </option>
																<option value="critica"> Crítica </option>
																<option value="outro"> Outro </option>

															</select>

															<textarea required rows="5" cols="5" name="txtcomentario" class="txt_area" placeholder="Comentário..."></textarea>

													</div>

													<div class="btn-comentario"> <input type="submit" name="btn_salvar" value="Enviar Comentario"> </div>
											</form>
									</div>
								</div>
							</div>

				  </section>
			</section>
		</section>
