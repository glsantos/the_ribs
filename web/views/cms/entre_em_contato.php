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
    header('entre_em_contato.php');

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

      <table>
        <tr>
          <td>Nome</td>
          <td>Telefone</td>
          <td>Email</td>
          <td>Classificação</td>
          <td>Comentário</td>
          <td></td>
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
          <td><a href="entre_em_contato.php?id=<?php echo($rs['id_entre_contato']); ?>">Excluir</a></td>
        </tr>

<?php } ?>
      </table>

    </section>

  </body>
</html>
