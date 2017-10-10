  <?php

class ControllerGaleria{


    public function ListarUnidades(){

        //Inclui a model da classe Unidade
        require_once('models/unidade_class.php');

		      $unidade_class = new Unidade();

		      return  $unidade_class->SelecionarTodasUnidades();

    }

    public function SalvarFoto(){
        require_once('models/galeria_class.php');
        require_once('controllers/controller_upload.php');

        //Resgatando os dados do form
        $id_unidade=$_POST['sltunidade'];
        
         $controllerUpload = new controllerUpload();
         
         $uploadfile = $controllerUpload->UploadFoto($_FILES['flefotos']); 
          
         $galeria_class = new Galeria();


         $galeria_class->id_unidade=$id_unidade;
         $galeria_class->imagem_unidade=$uploadfile;

         $retorno_ = $galeria_class->Insert($galeria_class);

        if($retorno_ == 'ok'){
            require_once('views/cms/cms_galeria_fotos.php');
        }else{
            echo "erro";
        }
  }



       public function ListarImagens(){


           require_once('models/galeria_class.php');

           $galeria_class = new Galeria();

           return  $galeria_class->SelecionarTodasImagens();

       }


       public function DeletarImagem(){


           require_once('models/galeria_class.php');
           $id_foto=$_GET['id'];

           $galeria_class = new Galeria();
           $galeria_class->id_foto=$id_foto;
           $galeria_class->ApagarImagem($galeria_class);

       }


        //Metodo Buscar um Registro pelo ID
        public function Buscar(){
            require_once('models/galeria_class.php');

            $id_foto = $_GET['id'];
            
            $galeria_class = new Galeria;


            $galeria_class->id_foto=$id_foto;


            $listGaleria=$galeria_class->SelecionarPorId($galeria_class);
            require_once('views/cms/cms_galeria_fotos.php');


        }
    
        public function Atualizar(){
            
             require_once('models/galeria_class.php');

              $id=$_GET['id'];
              
              $id_unidade=$_POST['sltunidade'];
           
              if(isset($_FILES['flefotos'])){
                  $caminho_arquivo = "arquivos_enviados/";
                  $foto = basename($_FILES['flefotos']['name']);
                  $up = $caminho_arquivo . $foto;
              }

              $galeria_class = new Galeria();

              $galeria_class->id_foto=$id;
              $galeria_class->id_unidade=$id_unidade;
              $galeria_class->imagem_unidade=$up;



              $galeria_class->UpdateGaleria($galeria_class);
            
        }
    
    
        public function Ativar(){
            
        require_once('models/galeria_class.php');

              $id=$_GET['id'];
              
              $galeria_class = new Galeria();

              $galeria_class->id_foto=$id;
             

              $galeria_class->AtivarItem($galeria_class);
            
        }
    
        
        public function Desativar(){
            
        require_once('models/galeria_class.php');

              $id=$_GET['id'];
              
              $galeria_class = new Galeria();

              $galeria_class->id_foto=$id;
             

              $galeria_class->DesativarItem($galeria_class);
            
        }





    }
?>
