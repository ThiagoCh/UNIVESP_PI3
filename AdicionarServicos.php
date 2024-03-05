<?php

    if(!empty($_GET['cpf']))
    {
        include_once('config.php');

        $cpf=$_GET['cpf'];
    }

    if(isset($_POST['submit']))
    {

            include_once('config.php');

            $cpf = $_POST['cpf'];
            $tipo = $_POST['tipo'];
            $servico = $_POST['servico'];
            $quantidade = $_POST['quantidade'];
            $preco = $_POST['preco'];
            $executado = $_POST['executado'];

            $result = mysqli_query($conexao, "INSERT INTO servicos(cpf,tipo,servico,quantidade,preco,executado) 
            VALUES('$cpf','$tipo','$servico','$quantidade','$preco','$executado')");

            header("Location: servicos.php?cpf=$cpf");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AddCliente</title>
        <link rel="stylesheet" href="adicionar_servicos.css">
    </head>
    <body>
        <?php
        $sqlSelect = "SELECT * FROM servicos WHERE cpf=$cpf";
        $result = $conexao->query($sqlSelect);
        if($user_data = mysqli_fetch_assoc($result))
                {
                    $cpf = $user_data['cpf'];
                    echo "<a href='servicos.php?cpf=$user_data[cpf]' class='btn-voltar'>Voltar</a>";
                }
        ?>
        <div class="cliente-box">
            <h1>Serviço</h1>
            <form action="AdicionarServicos.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="inputLabel">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tipo" id="tipo" class="inputUser" required>
                    <label for="tipo" class="inputLabel">Tipo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="servico" id="servico" class="inputUser" required>
                    <label for="servico" class="inputLabel">Servico</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="inputLabel">Quantidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" required>
                    <label for="preco" class="inputLabel">Preço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="executado" id="executado" class="inputUser" required>
                    <label for="executado" class="inputLabel">Executado</label>
                </div>
                <br>
                <div class="cliente-button">
                    <input type="submit" name="submit" id="submit" value="Salvar" class="btn">
                </div>
            </form>
        </div>        
    </body>
</html>