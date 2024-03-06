<?php

    include_once('verificarlogin.php');

    if(isset($_POST['submit']))
    {

            include_once('config.php');

            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $sexo = $_POST['genero'];
            $endereco = $_POST['endereco'];
            $cep = $_POST['cep'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];

            $result = mysqli_query($conexao, "INSERT INTO cliente(nome,cpf,tel,email,sexo,endereco,cep,cidade,estado) 
            VALUES('$nome','$cpf','$tel','$email','$sexo','$endereco','$cep','$cidade','$estado')");

            header('Location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cliente</title>
        <link rel="stylesheet" href="cliente.css">
    </head>
    <body>
        <a href="sistema.php" class="btn-voltar">Voltar</a>
        <div class="cliente-box">
            <h1>Cliente</h1>
            <form action="Cliente.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="inputLabel">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="inputLabel">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tel" id="tel" class="inputUser" required>
                    <label for="tel" class="inputLabel">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="inputLabel">E-mail</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="inputLabel">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="inputLabel">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="inputLabel">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="inputLabel">Estado</label>
                </div>
                <br>
                <div class="cliente-button">
                    <input type="submit" name="submit" id="submit" value="Salvar" class="btn">
                </div>
            </form>
        </div>        
    </body>
</html>