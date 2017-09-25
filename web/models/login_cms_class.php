<?php

/*
    **************************************************************
    *Objetivo: Criar a modelagem para manipulação dos dados com o BD
    *Autor: Marcel
    *Data: 01/08/2017
    *Ultima Modificação: 01/08/2017
    *Modificações:
    *Arquivos relacionados: models/bd_class.php
    *                       controller/contatos_controller.php
    **************************************************************


*/


class Contato
{
   
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

        $sql="select * from tbl_funcionarios where nome=".$login_class->login."and senha".$login_class->senha;

        $select = mysql_query($sql);

        if(mysql_num_rows($select) > 0){
            $rs=mysql_fetch_row($select);
			$_SESSION['nome']=$rs[1]; 
            header('views/pagina-inicial-cms.php');
        }


    }
}
?>
