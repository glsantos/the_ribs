<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN SISTEMA GERENCIADOR THE RIBS</title>
    </head>
    <body>

            <div id="caixa_login_cms">
                <h1>
                    LOGIN CMS
                </h1>

                     <form name="frmcms" method="post" action="../router.php?controller=verificar_login_cms&modo=autenticacao_cms">
                      <h1>Login</h1>
                      <p><input type="text" name="txtlogin" required placeholder="Digite seu nome"></p>
                      <p><input type="password" name="txtsenha" required placeholder="Digite sua senha"></p>
                      <p><input type="submit" value="Entrar"></p>
                    </form>

            </div>

    </body>
</html>
