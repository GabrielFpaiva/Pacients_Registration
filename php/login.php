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
    <?php
        session_start();
        $error="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            if($usuario == "admin" && $senha=="123"){
                $_SESSION["usuario"] = $usuario;
                header("Location: register_pacient.php");
            }else{
                $error="Login ou Senha Inválido!";
            }
        }
    ?>
    <div id="login">

        <form class="form" method="post" action="login.php">
        

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

            <p style="color: red; font-size: 10px"><?=$error?></p>

            </form>

        </div>

</body>
</html>