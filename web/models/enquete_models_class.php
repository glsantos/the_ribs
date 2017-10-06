<?php
  class Enquete{

        public $id_enquete;
        public $enquete;
        public $status;

        public function __construct(){

        require_once('banco_classe.php');

        $conexao_bd = new Mysql_db();

        $conexao_bd ->conectar();
      }
      public function Insert($enquete){
          $sql="insert into tbl_enquete(enquete)values('".$enquete->enquete."')";

        if(mysql_query($sql)){
          return "Salvo";
        }else{
          echo("Erro no script".mysql_error());
        }
      }

      public function SelectAll(){
        $sql= "select * from tbl_enquete";

        $select = mysql_query($sql);

        $cont=0;

        $rs="";
        while($rs=mysql_fetch_array($select)) {

            $list_enquete[] = new Enquete();

            $list_enquete[$cont]->id_enquete=$rs['id_enquete'];
            $list_enquete[$cont]->enquete=$rs['enquete'];

            $cont+=1;
        }

        return $list_enquete;

      }
  }
?>
