<?php
/*
    **************************************************************
    *Objetivo: Estabecer uma conexão com o Banco de Dados (Mysql)
    *Autor: Marcos Ricardo
    *Data: 25/09/2017
    *Ultima Modificação: 25/09/2017
    *Modificações:
    *Arquivos relacionados: qualquer arquivo da model
    *
    **************************************************************


*/


    class Mysql_db{

        //Atributos para estabelecer a conexao com o BD
        public $server;
        public $user;
        public $password;

        //O construtor ou metodo mágico é criado
        //utilizando dois __construct
        public function __construct(){
            $this->server="localhost";
            $this->user="root";
            $this->password="bcd127";

        }

        //Metodo para Conectar no Bando de Dados
        public function conectar(){

            //Estabelece a conexao com o BD, caso a conexao seja realizada com sucesso
            //seleciona o database, caso contrário mostra uma msg de erro e mata a conexao
            if($conexao=mysql_connect($this->server,$this->user,$this->password))
            {
                mysql_select_db("db_theribsws");
            }else
            {
                echo("Erro na conexão com o Banco de Dados, Favor entrar em contato com o Administrador");
                die();
            }

        }

        //Metodo para Fechar a conexao com o Bando de Dados
        public function desconectar(){
          
            mysql_close($conexao);
        }

    }


?>
