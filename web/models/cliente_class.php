<?php
session_start();
  /*
     ************************************************************************************************
     * Objetivo: Criar a modelagem para a manipulação dos dados com o BD
     * Autor: Giovanna Silva Resende
     * Data: 25/09/2017
     * Ultima modificação: 25/09/2017
     * Modificações:
     * ************************************************************************************************
   */

  class Cliente{

    public $nome_usuario;
    public $sobrenome;
    public $rg;
    public $cpf;
    public $usuario;
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

    function Login($dados_logon){

        $sql_select = "select * from tbl_clientes where nome_usuario ='".$dados_logon->nome_usuario."'
        and senha='".$dados_logon->senha."';";

        $exec = mysql_query($sql_select);

        if($rs = mysql_fetch_array($exec)){

          $_SESSION['id_cliente'] = $rs['id_cliente'];
          $_SESSION['nome_cliente'] = $rs['nome_cliente'];
          $_SESSION['sobrenome_cliente'] = $rs['sobrenome_cliente'];
          $_SESSION['rg'] = $rs['rg'];
          $_SESSION['cpf'] = $rs['cpf'];
          $_SESSION['nome_usuario'] = $rs['nome_usuario'];
          $_SESSION['senha'] = $rs['senha'];

        }

        require_once('views/cliente/index_cliente_view.php');

    }

    function Cadastro($dados_cadastrais){

      $valores = ("'$dados_cadastrais->nome_usuario', '$dados_cadastrais->sobrenome', '$dados_cadastrais->rg', '$dados_cadastrais->cpf', '$dados_cadastrais->usuario', '$dados_cadastrais->senha'");

      $sql_insert = "insert into tbl_clientes(nome_cliente, sobrenome_cliente, rg, cpf, nome_usuario, senha) values($valores);";

    if(mysql_query($sql_insert)){

        return true;

      }else {

        return false;
      }

    }

  }


?>
