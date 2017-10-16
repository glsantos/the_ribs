
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
					$id=$_GET['id'];

					require_once('models/sobre_model.php');
					$modelsobre = new Sobre();

                    $modelsobre->id=$id;
					$modelsobre->Delete($modelsobre);
				
                   if($retorno = 'ok'){
                        
                         echo("<script>alert('Modelo Deletado com sucesso!')</script>"); 
                        require_once('views/cms/sobre_view.php');
                    }else{
                      require_once('views/cms/sobre_view.php');
                   }
			}
			
			public function ListarRegistros(){
           
				require_once('models/sobre_model.php');

				$list = new Sobre();

				return $list->SelectAll();
			}
            
            
            
			public function Buscar(){
				  $id=$_GET['id'];
				  require_once('models/sobre_model.php');
				  $modelsobre = new Sobre();
				  $modelsobre->id=$id;
				  $list = $modelsobre->SelectById($modelsobre);
			
				   require_once('views/cms/sobre_view.php');
			}
            public function Atualizar(){
            
             require_once('models/sobre_model.php');

             $id=$_GET['id'];
             $txt_efeito=$_POST['txtefeito'];
             $txt_missao=$_POST['txtmissao'];
             $txt_valores=$_POST['txtvalores'];
             $txt_objetivo=$_POST['txtobjetivo'];
             $txt_historia=$_POST['txthistoria'];
            
              if(isset($_FILES['fleimagemdeEfeito'])){
                  $caminho_arquivoEfeito = "arquivos_enviados/";
                  $fotoEfeito = basename($_FILES['fleimagemdeEfeito']['name']);
                  $upEfeito = $caminho_arquivoEfeito . $fotoEfeito;
              }
              if(isset($_FILES['fleimagemHistoria'])){
                  $caminho_arquivoHistoria = "arquivos_enviados/";
                  $fotoHistoria = basename($_FILES['fleimagemdeEfeito']['name']);
                  $upHistoria = $caminho_arquivoHistoria . $fotoHistoria;
              }

                $modelsobre = new Sobre();
                $modelsobre->id=$id;
                $modelsobre->missao=$txt_missao;
                $modelsobre->valores=$txt_valores;
                $modelsobre->objetivo=$txt_objetivo;
                $modelsobre->fraseEfeito=$txt_efeito;
                $modelsobre->historia=$txt_historia;
                $modelsobre->imagemEfeito=$upEfeito;
                $modelsobre->imagemHistoria=$upHistoria;
    
                $modelsobre->Update($modelsobre);
            
        }
    
    
        public function Ativar(){
            
        require_once('models/sobre_model.php');

              $id=$_GET['id'];
              
              $modelsobre = new Sobre();

              $modelsobre->id=$id;
             

              $modelsobre->AtivarItem($modelsobre);
            
        }
    
        
        public function Desativar(){
            
        require_once('models/sobre_model.php');

              $id=$_GET['id'];
              
              $modelsobre = new Sobre();

              $modelsobre->id=$id;
             

              $modelsobre->DesativarItem($modelsobre);
            
        }
            
            
            
            
		}	
?>