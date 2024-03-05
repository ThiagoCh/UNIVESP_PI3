<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Login</h1>
            <form action="Teste-Login.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="inputLabel">Usuário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="inputLabel">Senha</label>
                </div>
                <br>
                <div class="login-button">
                    <button type="submit" name="submit" id="submit">Voltar</button>
                    <button type="submit" name="submit" id="submit">Entrar</button>
                </div>
            </form>
        </div>        
    </body>
</html>