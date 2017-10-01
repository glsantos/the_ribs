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


        public function Autenticar(){

            require_once('models/login_cms_class.php');



            $login=$_POST['txtlogin'];
            $senha=$_POST['txtsenha'];

            $login_class = new Login();


            $login_class->login=$login;
            $login_class->senha=$senha;


            	$retorno = $login_class->Verificar($login_class);


              if($retorno == 'null'){

                    header('location:index.php?pagina=login_cms');

              }else{

                session_start();
                 $_SESSION['nome'] = $login_class->login;
                 $_SESSION['id'] = $login_class->idLogin;
                 $_SESSION['login'] = 'true';


                header('location:views/cms/pagina-inicial-cms.php');

              }





    }
  }
?>
