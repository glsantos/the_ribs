
	<?php 
		class ControllerSobre{
			
			public function Novo(){
				
                
                require_once('models/sobre_model.php');
                require_once('controllers/controller_upload.php');
                
                
			        $txt_efeito=$_POST['txtefeito'];
                    $txt_missao=$_POST['txtmissao'];
                    $txt_valores=$_POST['txtvalores'];
                    $txt_objetivo=$_POST['txtobjetivo'];
                    $txt_historia=$_POST['txthistoria'];
                
                    $controllerUpload = new controllerUpload();
         
                    $uploadfile_efeito = $controllerUpload->UploadFoto($_FILES['fleimagemdeEfeito']); 
                    $uploadfile_historia = $controllerUpload->UploadFoto($_FILES['fleimagemHistoria']);   
                        
					$modelsobre = new Sobre();
					
					$modelsobre->missao=$txt_missao;
					$modelsobre->valores=$txt_valores;
                    $modelsobre->objetivo=$txt_objetivo;
                    $modelsobre->fraseEfeito=$txt_efeito;
                    $modelsobre->historia=$txt_historia;
                    $modelsobre->imagemEfeito=$uploadfile_efeito;
                    $modelsobre->imagemHistoria=$uploadfile_historia;
					
					$retorno = $modelsobre->Insert($modelsobre);
			         
                
                
                    if($retorno = 'ok'){
                        require_once('views/cms/sobre_view.php');
                    }else{
                      require_once('views/cms/sobre_view.php');
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
			
			public function ListarRegistros(){
           
				require_once('models/sobre_model.php');

				$list = new Sobre();

				return $list->SelectAll();
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