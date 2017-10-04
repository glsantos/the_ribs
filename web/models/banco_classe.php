<?php
/*
    **************************************************************
    *Objetivo: Estabecer uma conexão com o Banco de Dados (Mysql)
    *Autor: Marcos Ricardo
    *Data: 25/09/2017
    *Ultima Modificação: 03/10/2017
    *Modificações: Sempre deixar dois valores para a $this->server. Um fica comentado... Será o localhost
    *Para uso doméstico e o IP da máquina servidora do Banco de Dados.
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

            /*$this->server="10.107.134.33";*/
            /*$this->server="10.107.134.11";*/
            $this->server="10.107.134.11";
            $this->user="root";
            $this->password="bcd127";

        }

        //Metodo para Conectar no Bando de Dados
        public function conectar(){

            //Estabelece a conexao com o BD, caso a conexao seja realizada com sucesso
            //seleciona o database, caso contrário mostra uma msg de erro e mata a conexao
            try{
				        $conexao = mysql_connect($this->server,$this->user,$this->password);
                mysql_select_db("dbtheribs_ws");
            }catch(Exception $e){
                echo("Erro na conexão com o Banco de Dados, Favor entrar em contato com o Administrador!<br> ERRO:". $e);
				        die();
            }

        }
        //Metodo para Fechar a conexao com o Bando de Dados
        public function desconectar(){
            mysql_close($conexao);
        }

    }


?>
