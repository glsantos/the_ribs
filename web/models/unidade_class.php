<?php


Class Unidade{



	public $id;
	public $nome_unidade;

	//Construtor da Classe
    public function __construct(){

        //Inclui o arquivo de conexao com o BD
        require_once('models/banco_classe.php');

        //Instancia a Classe Mysql_db
        $conexao_bd = new Mysql_db();

        //Chama o metodo conectar para estabelecer a conexão como BD
        $conexao_bd->conectar();


    }

	 //Metodo para Selecionar todos os Registros
    public function SelecionarTodasUnidades(){


        //script de select no banco de dados
        $sql="select * from tbl_unidades";

				$select = mysql_query($sql);

        $cont=0;

        //repetição para guardar os registros do BD em um Array de objetos
        while($rs=mysql_fetch_array($select)){


            //Instancia da classe Unidade, criando uma coleção de objetos[]
            $listUnidades[] = new Unidade();

            //Guardando em cada objeto um registro do BD
            //referenciando pelo indice $cont
            $listUnidades[$cont]->id=$rs['id_unidade'];
            $listUnidades[$cont]->nome_unidade=$rs['nome_unidade'];

            $cont+=1;

        }


        return $listUnidades;

    }



}
?>
