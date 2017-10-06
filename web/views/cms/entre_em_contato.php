<?php
  $server = "localhost";
  $user = "root";
  $password = "bcd127";

  try{
      $conexao = mysql_connect($server,$user,$password);
      mysql_select_db("dbtheribs_ws");
  }catch(Exception $e){
      echo("Erro na conexão com o Banco de Dados, Favor entrar em contato com o Administrador". $e);
      die();
  }


  if(isset($_GET['id'])){

    $id = $_GET['id'];

    $excluir = "delete from tbl_entre_contato where id_entre_contato = $id";
    mysql_query($excluir);
    require_once('entre_em_contato.php');

  }
?>

<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <section class="section_fale_conosco">

      <table id = "tbl_entre_em_contato">
        <tr>

          <td><b><h1>Nome</h1></b></td>
          <td><b><h1>Telefone</h1></b></td>
          <td><b><h1>Email</h1></b></td>
          <td><b><h1>Classificação</h1></b></td>
          <td><b><h1>Comentário</h1></b></td>
          <td><b><h1></h1></b></td>

        </tr>

<?php

  $select = "select tbl_entre.*, class.classificacao from tbl_entre_contato as tbl_entre inner join tbl_classificacao_contato as class
on tbl_entre.id_classificacao = class.id_classificacao;";
  $exec = mysql_query($select);

  while($rs = mysql_fetch_array($exec)){

?>
        <tr>
          <td><?php echo($rs['nome']); ?></td>
          <td><?php echo($rs['telefone']); ?></td>
          <td><?php echo($rs['email']); ?></td>
          <td><?php echo($rs['classificacao']); ?></td>
          <td><?php echo($rs['comentario']); ?></td>
          <td><a href="router_cms.php?modo=apagar_contato&id=<?php echo($rs['id_entre_contato']); ?>">Excluir</a></td>
        </tr>

<?php } ?>
      </table>

    </section>

  </body>
</html>
