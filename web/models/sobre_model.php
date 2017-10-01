<!-- Models class cms_sobre -->
	<?php 
		class cadastro_conteudo_sobre{
			
			public $id_sobre_empresa;
			public $missao;
			public $valores;
			public $objetivos;
			public $historia;
			public $img_missao;
			public $img_valores;
			public $img_objetivo;
			public $img_historia;
			public $img_sobre;
			
			public function__construct(){
				require_once('models/#.php');
				
				
			$conexao_bd = new Mysql_db();
			
			$conexao_bd->conectar();
			}
		}
		
		public function Insert($sobre_empresa){
			
		$sql="insert into tbl_sobre_empresa(missao, valores, objetivos, historia, img_missao, img_valores, img_objetivo, img_historia, img_sobre)
		values('".$sobre_empresa->missao."',
			'".$sobre_empresa->valores."',
            '".$sobre_empresa->objetivos."',
            '".$sobre_empresa->historia."'
			'".$sobre_empresa->img_missao."',
			'".$sobre_empresa->img_valores."',
            '".$sobre_empresa->img_objetivo."',
            '".$sobre_empresa->img_historia."'
			'".$sobre_empresa->img_sobre."'
            );";
			
			
			if(mysql_query($sql)){

                ?><script>alert('Inserido'); window.location="index.php";</script><?php
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

            //Script de select no banco de dados
            $sql="select * from tbl_sobre_empresa order by id_sobre_empresa desc";
            $select = mysql_query($sql);

            $cont=0;

            //Repetição para guardar os registros em um Array de Objetos
            while($rs=mysql_fetch_array($select)){

                //Instância da classe Contato, criando uma coleção de Objetos
                $sobreEmpresa[] = new cadastro_conteudo_sobre();

                //Guardando em cada Objeto um Registro diferente do BD
                $sobreEmpresa[$cont]->id_sobre_empresa=$rs['id_sobre_empresa'];
				$sobre_empresa[$cont]->missao=$rs['missao'];
				$sobre_empresa[$cont]->valores=$rs['valores'];
				$sobre_empresa[$cont]->objetivos=$rs['objetivos'];
				$sobre_empresa[$cont]->historia=$rs['historia'];
				$sobre_empresa[$cont]->img_missao=$rs['img_missao'];
				$sobre_empresa[$cont]->img_valores=$rs['img_valores'];
				$sobre_empresa[$cont]->img_objetivo=$rs['img_objetivo'];
				$sobre_empresa[$cont]->img_historia=$rs['img_historia'];
				$sobre_empresa[$cont]->img_sobre=$rs['img_sobre'];
				

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