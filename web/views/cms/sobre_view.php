<?php

		$id_sobre_empresa="";
		$missao="";
		$valores="";
		$objetivos="";
		$historia="";
		$img_missao="";
		$img_valores="";
		$img_objetivo="";
		$img_historia="";
		$img_sobre="";
        $action="salvar_sobre";
  if(isset($_GET['modo'])){


      if($_GET['modo'] =='alterar'){

				$id_sobre_empresa->$list->id_sobre_empresa;
				$missao->$list->missao;
				$valores->$list->valores;
				$objetivos->$list->objetivos;
				$historia->$list->historia;
				$img_missao->$list->img_missao;
				$img_valores->$list->img_valores;
				$img_objetivo->$list->img_objetivo;
				$img_historia->$list->img_historia;
				$img_sobre->$list->img_sobre;


	      $action="editar&id=".$id_sobre_empresa;

      }
  }

?>

<div id="container-cms">

    <?php require_once('header.php'); ?>

    <section>

        <?php require_once('menu.php'); ?>

        <div id="conteudo-cms">

					<form name="frmsobre" action="router?controller=cms_sobre&modo=<?php echo($action)?>" ></form>
						<table>
							<tr>
								<td>Cadastro de Conteudo d pagina Sobre a The Ribs</td>
							</tr>
							<tr>
								<td>Imagem Principal:</td>
								<td><input type="file" name="file_imagem_principal" value=""></td>
							</tr>
							<tr>
								<td>Frase de efeito:</td>
								<td><input type="text" name="txtfrase" value=""></td>
							</tr>
							<tr>
								<td>Imagem Missão:</td>
								<td><input type="file" name="file_missao" value=""></td>
							</tr>
							<tr>
								<td>Missão:</td>
								<td><input type="file" name="file_missao" value=""></td>
							</tr>

							<tr>
								<td>Imagem Valores:</td>
								<td><input type="file" name="file_valores" value=""></td>
							</tr>
							<tr>
								<td>Valores:</td>
								<td><input type="file" name="file_missao" value=""></td>
							</tr>
							<tr>
								<td>Imagem Objetivos:</td>
								<td><input type="file" name="file_objetivos" value=""></td>
							</tr>
							<tr>
								<td>Objetivo:</td>
								<td><input type="file" name="file_missao" value=""></td>
							</tr>
							<tr>
								<td>Imagem de fundo falando da história:</td>
								<td><input type="file" name="file_fundo_historia" value=""></td>
							</tr>
							<tr>
								<td>Titulo:</td>
								<td><input type="text" name="titulo_hitoria" value=""></td>
							</tr>
							<tr>
								<td>Texto explicativo:</td>
								<td><input type="text" name="hitoria_ribs" value=""></td>
							</tr>
						</table>
					</form>

        </div>
    </section>
    <footer>
        <?php require_once('rodape.php'); ?>
    </footer>


</div>
