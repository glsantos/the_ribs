<?php

  /*
     ************************************************************************************************
     * Objetivo: Criar a modelagem para a manipulação dos dados com o BD
     * Autor: Giovanna Silva Resende
     * Data: 25/09/2017
     * Ultima modificação: 25/09/2017
     * Modificações:
     * ************************************************************************************************
   */
  class ClienteLogar{

    public $nome_usuario;
    public $senha;

    function Login($dados_logon){

        $sql_select = "select * from tbl_clientes where nome_usuario ='".$dados_logon->$nome_usuario."'
        and senha='".$dados_logon->$senha."'";
        mysql_query($sql_select);

    }

  }


?>
