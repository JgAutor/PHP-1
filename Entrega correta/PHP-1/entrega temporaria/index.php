<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Teste</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        echo "<script>alert('Hello World');</script>";
    ?>

    <div class="wrapper">
        <form action="" method="POST">
            <h2>Bem-vindo</h2>
            <div class="input-field">
                <input type="text" name="email" required>
                <label>Insira seu E-mail</label>
            </div>
            <div class="input-field">
                <input type="password" name="senha" required>
                <label>Insira sua Senha</label>
            </div>
            <div class="forget">
                <label for="remember">
                    <input type="checkbox" id="remember">
                    <p>Me lembre</p>
                </label>
                <a href="#">Esqueci a senha</a>
            </div>
            <button type="submit">Log-in</button>
            <div class="register">
                <p>
                    Não tem uma conta?
                    <a href="#">Registre-se</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>