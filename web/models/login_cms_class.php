<?php

/*
    **************************************************************
    *Objetivo: Criar a modelagem para manipulação dos dados com o BD
    *Autor: Marcos
    *Data: 01/08/2017
    *Ultima Modificação: 01/08/2017
    *Modificações:
    *Arquivos relacionados: models/bd_class.php
    *                       controller/controller_login_cms.php
    **************************************************************


*/


class Login{

    public $id_usuario;
    public $login;
    public $senha;


    //Construtor da Classe
    public function __construct(){

        //Inclui o arquivo de conexao com o BD
        require_once('models/banco_classe.php');

        //Instancia a Classe Mysql_db
        $conexao_bd = new Mysql_db();

        //Chama o metodo conectar para estabelecer a conexão como BD
        $conexao_bd->conectar();

    }


    //Metodo para Selecionar Registro pelo ID
    public function Verificar($login_class){

        $sql="select * from tbl_funcionarios where usuario_funcionario='".$login_class->login."'and senha=".$login_class->senha;

         echo($sql);
        if($select = mysql_query($sql)){
             if($resultado=mysql_fetch_array($select)){
                 $login_class->login=$resultado['usuario_funcionario'];
                 $login_class->id_usuario=$resultado['id_funcionario'];
                 $login_class->senha=$resultado['senha'];
             }
               return $login_class;
             }
        else{
               return 'null';
        }
    }
}
?>
