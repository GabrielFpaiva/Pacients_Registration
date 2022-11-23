<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <div id="login">

        <form class="form" method="post" action="checklogin.php">
        

            <div class="form-header">

                <h2>Login</h2>

            </div>

            <div class="form-content">

                <div class="form-content-area">

                    <label for="user">Usuário</label>

                    <input class="campo" type="text" name="usuario" autocomplete="off" placeholder="Insira seu nome de usuario">

                </div>

                    <div class="form-content-area">

                        <label for="password">Senha</label>

                        <input class="campo" type="password" name="senha" autocomplete="off" placeholder="Insira sua senha">

                    </div>

                </div>

                <div class="form-footer">

                    <button type="submit" class="botao">Entrar</button>
                </div>

            </form>

        </div>

</body>
</html>