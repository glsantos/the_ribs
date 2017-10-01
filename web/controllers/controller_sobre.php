<!--Controller carastro_conteudo_sobre -->
	
	<?php 
		class ControllerCadastroSobre{
			
			public function Novo(){
				
			  if($_SERVER['REQUEST_METHOD']=='POST'){

					$cadastroSobre_classe = new ControllerCadastroSobre();
					
					$cadastroSobre_classe->missao=$missao;
					$cadastroSobre_classe->valores=$valores;
					$cadastroSobre_classe->objetivos=$objetivos;
					$cadastroSobre_classe->historia=$historia;
					$cadastroSobre_classe->img_missao=$img_missao;
					$cadastroSobre_classe->img_valores=$img_valores;
					$cadastroSobre_classe->img_objetivo=$img_objetivo;
					$cadastroSobre_classe->img_historia=$img_historia;
					$cadastroSobre_classe->img_sobre=$img_sobre;
					
					
					$cadastroSobre_classe->Insert($cadastroSobre_classe);
			  }
			}

			 public function Apagar(){

				if($_SERVER['REQUEST_METHOD']=='GET'){
					$id_pessoa=$_GET['id_sobre_empresa'];

					require_once('models/#.php');
					$deleteCadastroSobre_Controller = new ControllerCadastroSobre();

					$deleteCadastroSobre_Controller->id_sobre_empresa=$id_sobre_empresa;
					$deleteCadastroSobre_Controller->Delete($deleteCadastroSobre_Controller);
				}
			}
			
			public function Listar(){
           
				require_once('models/#.php');

				$listCadastroSobre_Controller = new ControllerCadastroSobre();

				return $listCadastroSobre_Controller->SelectAll();
			}
			public function Buscar(){

				  //Recebe o ID enviado na View no click do Editar!
				  $id_sobre_empresa=$_GET['id_sobre_empresa'];

				  require_once('models/#.php');
				  $listCadastroSobreEmpresa_Controller = new Contato();

				  //Coloca o código selecionado no objeto instanciado
				  $listCadastroSobreEmpresa_Controller->id_sobre_empresa=$id_sobre_empresa;
				  //Chamada para o método que vai pesquisar no BD pelo ID
				  $list = $listCadastroSobreEmpresa_Controller->SelectById($listCadastroSobreEmpresa_Controller);
				  $list = $listCadastroSobreEmpresa_Controller->SelectById($listCadastroSobreEmpresa_Controller);
				  require_once("index.php");
			}
		}	
		?>