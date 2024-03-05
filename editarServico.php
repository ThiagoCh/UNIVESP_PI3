<?php
    if(!empty($_GET['cpf']))
    {
            include_once('config.php');

            $cpf = $_GET['cpf'];
            $id = $_GET['id'];

            $sqlSelect = "SELECT * FROM servicos WHERE id=$id";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {
                while($user_data = mysqli_fetch_assoc($result))
                {
                    $tipo = $user_data['tipo'];
                    $servico = $user_data['servico'];
                    $quantidade = $user_data['quantidade'];
                    $preco = $user_data['preco'];
                    $executado = $user_data['executado'];
                }
            }
            else
            {
                header('Location: servicos.php');
            }
    }
    else
    {
        header('Location: servicos.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Serviço</title>
        <link rel="stylesheet" href="editarServico.css">
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
            <h1>Cliente</h1>
            <form action="saveEditServico.php" method="POST">
                <div>
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="inputLabel">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tipo" id="tipo" class="inputUser" value="<?php echo $tipo ?>" required>
                    <label for="tipo" class="inputLabel">Tipo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="servico" id="servico" class="inputUser" value="<?php echo $servico ?>" required>
                    <label for="servico" class="inputLabel">Servico</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" value="<?php echo $quantidade ?>" required>
                    <label for="quantidade" class="inputLabel">Quantidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" value="<?php echo $preco ?>" required>
                    <label for="preco" class="inputLabel">Preço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="executado" id="executado" class="inputUser" value="<?php echo $executado ?>" required>
                    <label for="executado" class="inputLabel">Executado</label>
                </div>
                <br>
                <div class="cliente-button">
                    <input type="submit" name="update" id="update" value="Salvar" class="btn">
                </div>
            </form>
        </div>        
    </body>
</html>