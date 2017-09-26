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

        //Metodo Buscar um Registro pelo ID
        public function Autenticar(){
            require_once('models/login_cms_class.php');
            echo"controller";
            if ($_SERVER['REQUEST_METHOD']==['POST']) {
             //Resgatando os dados do form
              $login=$_POST['txtlogin'];
              $senha=$_POST['txtsenha'];

            $login_class = new Login;


            $login_class->login=$login;
            $login_class->senha=$senha;

            $login_class->Verificar($login_class);
          }

        }
  }

?>
