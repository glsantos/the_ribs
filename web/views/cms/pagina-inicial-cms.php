<!DOCTYPE html>
<html>
  <head>
    <title>Sistema Gerenciador do Site</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo_pagina_principal_cms.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){

            $("section a").click(function(evento){
                //tira a funcionalidade de link
                  var url = $(this).attr("href");
                evento.preventDefault();

                $.ajax({
                    type:"POST",
                    url: url,
                    data: "",
                    beforeSend:function(){
                        $("#loader").show();

                    },
                    success:function(retorno){
                        $("#loader").hide();
                        $("#conteudo-cms").html(retorno);
                    }


                });

            });


          });
    </script>
  </head>
  <body>
    <div id="container-cms">
        <header>
          <h1>Cabeçalho CMS</h1>
        </header>

        <section>
            <span id="loader" style="display:none"><img src="img/ajax-loader.gif"></span>
            <div id="menu-cms">
                <li>
                    <ul><a href="cms_galeria_fotos.php">Gerenciar galeria de fotos</a></ul>
                    <ul></ul>
                    <ul></ul>
                    <ul></ul>
                </li>
            </div>
            <div id="conteudo-cms">
              Pagina  Principal CMS
            </div>
        </section>
        <footer>
            <h1>rodape</h1>
        </footer>
    </div>

  </body>
</html>
