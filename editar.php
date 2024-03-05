<?php
    if(!empty($_GET['cpf']))
    {
            include_once('config.php');

            $cpf=$_GET['cpf'];

            $sqlSelect = "SELECT * FROM cliente WHERE cpf=$cpf";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {
                while($user_data = mysqli_fetch_assoc($result))
                {
                    $nome = $user_data['nome'];
                    $cpf = $user_data['cpf'];
                    $tel = $user_data['tel'];
                    $email = $user_data['email'];
                    $sexo = $user_data['sexo'];
                    $endereco = $user_data['endereco'];
                    $cep = $user_data['cep'];
                    $cidade = $user_data['cidade'];
                    $estado = $user_data['estado']; 
                }
            }
            else
            {
                header('Location: sistema.php');
            }
    }
    else
    {
        header('Location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cliente</title>
        <link rel="stylesheet" href="editar.css">
    </head>
    <body>
        <a href="sistema.php" class="btn-voltar">Voltar</a>
        <div class="cliente-box">
            <h1>Cliente</h1>
            <form action="saveEdit.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="inputLabel">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="inputLabel">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tel" id="tel" class="inputUser" value="<?php echo $tel ?>" required>
                    <label for="tel" class="inputLabel">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="inputLabel">E-mail</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
                <label for="outro">Outro</label>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                    <label for="endereco" class="inputLabel">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cep" id="cep" class="inputUser" value="<?php echo $cep ?>" required>
                    <label for="cep" class="inputLabel">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                    <label for="cidade" class="inputLabel">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
                    <label for="estado" class="inputLabel">Estado</label>
                </div>
                <br>
                <div class="cliente-button">
                    <input type="submit" name="update" id="update" value="Salvar" class="btn">
                </div>
            </form>
        </div>        
    </body>
</html>