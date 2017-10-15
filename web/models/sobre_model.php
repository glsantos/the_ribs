	<?php
		class Sobre{

			public $id;
			public $missao;
			public $valores;
			public $objetivo;
			public $historia;
            public $fraseEfeito;
            public $imagemEfeito;
            public $imagemHistoria;
            
            
            
			public function __construct(){
				require_once('models/banco_classe.php');


                $conexao_bd = new Mysql_db();

                $conexao_bd->conectar();
			}
		

            public function Insert($sobre){

            $sql="insert into tbl_sobre_empresa(missao, valores, objetivos, historia,frase_efeito,img_efeito, img_historia, status)
            values('".$sobre->missao."',
                   '".$sobre->valores."',
                   '".$sobre->objetivo."',
                   '".$sobre->historia."',
                   '".$sobre->fraseEfeito."',
                   '".$sobre->imagemEfeito."',
                   '".$sobre->imagemHistoria."', 
                   0);";

                
                
                if(mysql_query($sql)){
                    echo("<script>alert('Modelo Inserido com sucesso!')</script>"); 
                    return 'ok';
                }else{
                    echo("Erro no Script de insert do banco de dados");
                }


            }

        public function Delete($deleteCadastro){

            $sql="delete from tbl_sobre_empresa where id_sobre_empresa = ".$deleteCadastro->id_sobre_empresa.";";

            if(mysql_query($sql)){

                ?><script>alert('Apagado com Sucesso'); window.location="index.php";</script><?php
            }else{
                echo('Falha ao Apagar');
            }
        }

        //Método para Selecionar todos os Registros
        public function SelectAll(){
            
            
            $sql="select * from tbl_sobre_empresa order by id_sobre_empresa desc";
            $select = mysql_query($sql);

            $cont=0;

            
            while($rs=mysql_fetch_array($select)){

                
                $sobre_empresa[] = new Sobre();

            
                $sobre_empresa[$cont]->id=$rs['id_sobre_empresa'];
				$sobre_empresa[$cont]->missao=$rs['missao'];
				$sobre_empresa[$cont]->valores=$rs['valores'];
				$sobre_empresa[$cont]->objetivos=$rs['objetivos'];
				$sobre_empresa[$cont]->historia=$rs['historia'];
                $sobre_empresa[$cont]->fraseEfeito=$rs['frase_efeito'];
				$sobre_empresa[$cont]->imagemHistoria=$rs['img_historia'];
				$sobre_empresa[$cont]->imagemEfeito=$rs['img_efeito'];


                $cont+=1;
            }

            return $sobre_empresa;
        }

        //Método para Selecionar Registro pelo ID
        public function SelectById($buscaCadastro){

            $sql="select * from tbl_sobre_empresa where id_sobre_empresa = ".$buscaCadastro->id_sobre_empresa;
            $select = mysql_query($sql);

            //Verifica se existe algum registro no BD
            if($rs=mysql_fetch_array($select)){

                //Instancia da Model Contato
                $listCadastro = new cadastro_conteudo_sobre();
				$listCadastro->id_sobre_empresa=$rs['id_sobre_empresa'];
				$listCadastro->missao=$rs['missao'];
				$listCadastro->valores=$rs['valores'];
				$listCadastro->objetivos=$rs['objetivos'];
				$listCadastro->historia=$rs['historia'];
				$listCadastro->img_missao=$rs['img_missao'];
				$listCadastro->img_valores=$rs['img_valores'];
				$listCadastro->img_objetivo=$rs['img_objetivo'];
				$listCadastro->img_historia=$rs['img_historia'];
				$listCadastro->img_sobre=$rs['img_sobre'];


                return $listCadastro;
            }
        }
    }
	?>
