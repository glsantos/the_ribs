<?php
/*
    **************************************************************
    *Objetivo: Uma classe para executar a autenticação do funcionario no cms
    *Autor: Marcos
    *Data: 25/09/2017
    *Ultima Modificação: 25/09/2017
    *Modificações:
    *Arquivos relacionados: models/contato_class.php
    *                       router.php
    *                       views/contato_view.php
    **************************************************************


*/


    class ControllerLogin{

        //Metodo Inserir Novo Registro
        public function Novo(){

            //Verificamos se realmente esse metodo foi
            //acionado pela requisição de um formulário,
            //utilizando o metodo POST
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                //Resgatando os dados do form
                $nome=$_POST['txtnome'];
                $telefone=$_POST['txttelefone'];
                $celular=$_POST['txtcelular'];
                $email=$_POST['txtemail'];

                //Instancia da classe Contato
                $contato_class = new Contato();

                //Carregando os atributos da classe Contato com os
                //valores do formulario enviado via post
                $contato_class->nome=$nome;
                $contato_class->telefone=$telefone;
                $contato_class->celular=$celular;
                $contato_class->email=$email;

                $contato_class->Insert($contato_class);

            }

        }

        //Metodo Atualizar um Registro
        public function Atualizar(){
          if($_SERVER['REQUEST_METHOD']=='POST')
          {
              //Resgatando os dados do form
              $nome=$_POST['txtnome'];
              $telefone=$_POST['txttelefone'];
              $celular=$_POST['txtcelular'];
              $email=$_POST['txtemail'];

              $codigo = $_GET['id'];

              //Instancia da classe Contato
              $contato_class = new Contato();

              //Carregando os atributos da classe Contato com os
              //valores do formulario enviado via post
              $contato_class->nome=$nome;
              $contato_class->telefone=$telefone;
              $contato_class->celular=$celular;
              $contato_class->email=$email;
              $contato_class->codigo=$codigo;

              $contato_class->Update($contato_class);

          }



        }

        //Metodo Apagar um Registro
        public function Apagar(){


            $id =$_GET['id'];
            require_once('models/contato_class.php');

            //instancia da model
              $contato = new Contato;

              $contato->codigo = $id;
            echo ($id);
            $contato->Delete($contato);


        }

        //Metodo Listar Todos os Registro
        public function Listar(){
            require_once('models/contato_class.php');
            //cria a instancia para a model contato
            $listContatos_Controller = new Contato;

            //chamada para o metodo SelectAll que vai fazer select no banco de dados
            return  $listContatos_Controller->SelectAll();

        }

        //Metodo Buscar um Registro pelo ID
        public function Buscar(){
            require_once('models/contato_class.php');
            //recebendo o ID enviado na view no click do editar
            $codigo = $_GET['id'];

            $contato = new Contato;
			
            //coloca o codigo selecionado no objeto instanciado
            $contato->codigo=$codigo;

            //chamada para o metodo que vai pesquisar no BD pelo ID
            $list=$contato->SelectById($contato);
            require_once('index.php');


        }
    }

?>
