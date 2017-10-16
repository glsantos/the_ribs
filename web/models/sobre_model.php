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
            public $status;
            
            
            
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
                    return 'ok';
                }else{
                    echo("Erro no Script de insert do banco de dados");
                }


            }

        public function Delete($deleteCadastro){

            $sql="delete from tbl_sobre_empresa where id_sobre_empresa = ".$deleteCadastro->id.";";

            if(mysql_query($sql)){
                return 'ok'; 
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
                $sobre_empresa[$cont]->status=$rs['status'];

                $cont+=1;
            }

            return $sobre_empresa;
        }

       
        public function SelectById($buscaCadastro){

            $sql="select * from tbl_sobre_empresa where id_sobre_empresa = ".$buscaCadastro->id;
            $select = mysql_query($sql);

            
            if($rs=mysql_fetch_array($select)){
                $modelsobre = new Sobre();
				$modelsobre->id=$rs['id_sobre_empresa'];
				$modelsobre->missao=$rs['missao'];
				$modelsobre->valores=$rs['valores'];
				$modelsobre->objetivo=$rs['objetivos'];
				$modelsobre->historia=$rs['historia'];
                $modelsobre->fraseEfeito=$rs['frase_efeito'];
				$modelsobre->imagemHistoria=$rs['img_historia'];
				$modelsobre->imagemEfeito=$rs['img_efeito'];
                
                return $modelsobre;
            }
        }
            
        public function Update($modelsobre){
            
            
            $sql="update tbl_sobre_empresa set
            missao='".$modelsobre->missao."',
            valores='".$modelsobre->valores."',
            objetivos='".$modelsobre->objetivo."',
            historia='".$modelsobre->historia."',
            frase_efeito='".$modelsobre->fraseEfeito."',
            img_historia='".$modelsobre->imagemHistoria."',
            img_efeito='".$modelsobre->imagemEfeito."'
            where id_sobre_empresa=".$modelsobre->id;
            
       
            
              if(mysql_query($sql)){
                   require_once('views/cms/sobre_view.php');
              }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
              }
            
        }
            
            
        
        public function Ativar(){
            
        require_once('models/sobre_model.php');

              $id=$_GET['id'];
              
              $modelsobre = new Sobre();

              $modelsobre->id=$id;
             

              $modelsobre->AtivarItem($modelsobre);
            
        }
    
        
        public function Desativar(){
            
        require_once('models/sobre_model.php');

              $id=$_GET['id'];
              
              $modelsobre = new Sobre();

              $modelsobre->id=$id;
             

              $modelsobre->DesativarItem($modelsobre);
            
        }
            
            
        
        public function AtivarItem($modelsobre){
            
            
            $sql="update tbl_sobre_empresa set
            status = 1
            where id_sobre_empresa=".$modelsobre->id;
        
            
            if(mysql_query($sql)){
                   echo("<script>alert('ATIVADO!')</script>");
                   require_once('views/cms/sobre_view.php');
              }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
              }
              
            
            
        }
    
    
        public function DesativarItem($modelsobre){
            
               
            $sql="update tbl_sobre_empresa set
            status = 0
            where id_sobre_empresa=".$modelsobre->id;
            
         
           
            if(mysql_query($sql)){
                   echo("<script>alert('DESATIVADO!')</script>");
                   require_once('views/cms/sobre_view.php');
              }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
              }
              
            
            
        }

        
            
            
            
            
    }
?>