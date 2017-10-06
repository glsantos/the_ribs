<?php

  if (isset($_POST['btncadastrar'])) {

    $nome = $_POST['txtnome'];
    $sobrenome = $_POST['txtsobrenome'];
    $rg = $_POST['txtrg'];
    $cpf = $_POST['txtcpf'];
    $usuario = $_POST['txtusuario'];
    $senha = $_POST['txtsenha'];

    $valores = "'$nome','$sobrenome','$rg','$cpf','$usuario','$senha'";

    $insert_cliente = "insert into tbl_clientes(nome_cliente, sobrenome_cliente, rg, cpf, usuario_cliente, senha) values($valores);";
    mysql_query($insert_cliente);

  }

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title> Cadastro </title>
    <link rel="stylesheet" href="css/estilo_cadastro.css">
  </head>
  <body>

    <section class="section_cadastro">

      <div class="form_cadastro">

        <form action="router.php?controller=cliente&modo=cadastrar" method="post">

          <div class="dados_cadastro_caixa">

            <div class="dados_cadastro">
              Nome:
            </div>

            <div class="dados_cadastro_input">
                <input type="text" name="txtnome" placeholder="" required>
            </div>

          </div>

          <div class="dados_cadastro_caixa">

            <div class="dados_cadastro">
              Sobrenome:
            </div>

            <div class="dados_cadastro_input">
                <input type="text" name="txtsobrenome" placeholder="" required>
            </div>

          </div>

          <div class="dados_cadastro_caixa">

            <div class="dados_cadastro">
              RG:
            </div>

            <div class="dados_cadastro_input">
                <input type="txtrg" name="txtrg" placeholder="" required>
            </div>

          </div>

          <div class="dados_cadastro_caixa">

            <div class="dados_cadastro">
              CPF:
            </div>

            <div class="dados_cadastro_input">
                <input type="text" name="txtcpf" placeholder="" required>
            </div>

          </div>

          <div class="dados_cadastro_caixa">

            <div class="dados_cadastro">
              Usuário:
            </div>

            <div class="dados_cadastro_input">
                <input type="text" name="txtusuario" placeholder="" required>
            </div>

          </div>

          <div class="dados_cadastro_caixa">

            <div class="dados_cadastro">
              Senha:
            </div>

            <div class="dados_cadastro_input">
                <input type="password" name="txtsenha" placeholder="" required>
            </div>

          </div>

          <div class="dados_cadastro_caixa">

            <input id="botao" title="Cadastrar" type="submit" name="btncadastrar" value="Cadastrar" placeholder="" required>

          </div>

        </form>

      </div>

    </section>

  </body>
</html>
