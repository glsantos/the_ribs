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

           //Resgatando os dados do form
           $id_unidade=$_POST['sltunidade'];

           /*CAMINHO DA PASTA ARQUIVO*/
           $caminho_arquivo = "arquivos_enviados/";
           /*PEGANDO O NOME DA IMAGEM*/
           $nome_imagem = basename($_FILES['flefotos']['name']);
           /*ARMAZENANDO NOME E O CAMINHO DENTRO DA VARIAVEL UPLOADFILE*/
           $uploadfile = $caminho_arquivo . $nome_imagem;

           /*PEGANDO A EXTENSAO DA IMAGEM*/
           $extensao = strtolower(substr($nome_imagem, strlen($nome_imagem)-3,3));

           /*VERIFICANDO A EXTENSAO DA IMAGEM*/

               if(move_uploaded_file ($_FILES['flefotos']['tmp_name'],$uploadfile)){

                 //Instancia da classe Galeria
                 $galeria_class = new Galeria();


                 $galeria_class->id_unidade=$id_unidade;
                 $galeria_class->imagem_unidade=$uploadfile;

                 $retorno_ = $galeria_class->Insert($galeria_class);

				if($retorno_ == 'ok'){

          require_once('views/cms/cms_galeria_fotos.php');

				}else {
					echo "erro";
				}

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


        //Metodo Atualizar um Registro
       public function Atualizar(){

         require_once('models/galeria_class.php');

              $id_foto=$_GET['id'];
              $id_unidade=$_POST['sltunidade'];

              if(isset($_FILES['flefotos'])){
                  $caminho_arquivo = "arquivos_enviados/";
                  $foto = basename($_FILES['flefotos']['name']);
                  $up = $caminho_arquivo . $foto;
              }

              $galeria_class = new Galeria();

              $galeria_class->id_foto=$id_foto;
              $galeria_class->id_unidade=$id_unidade;
              $galeria_class->imagem_unidade=$up;



              $galeria_class->Update($galeria_class);




       }




    }
?>
