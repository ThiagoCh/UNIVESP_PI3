<?php
    if(!empty($_GET['cpf']))
    {
            include_once('config.php');

            $cpf=$_GET['cpf'];

            $sqlSelect = "SELECT * FROM servicos WHERE cpf=$cpf";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {
                while($user_data = mysqli_fetch_assoc($result))
                {
                    $cpf = $user_data['cpf'];
                    $tel = $user_data['tipo'];
                    $email = $user_data['servico'];
                    $sexo = $user_data['quantidade'];
                    $endereco = $user_data['preco'];
                    $cep = $user_data['executado'];
                }
            }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serviços</title>
        <link rel="stylesheet" href="servicos1.css">
    </head>
    <body>
        <div class="d-flex">
            <a href="sistema.php" class="btn-voltar">Voltar</a>
        </div>
        <br><br>
        <div class="tabelaServicos">
            <h1>Serviços</h1>
            <table class="table">
                <thread>
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Serviço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Executado</th>
                        <th scope="col"></th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                        $sqlSelect = "SELECT * FROM servicos WHERE cpf=$cpf";

                        $result = $conexao->query($sqlSelect);
            
                        if($result->num_rows > 0)
                        {
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['tipo']."</td>";
                                echo "<td>".$user_data['servico']."</td>";
                                echo "<td>".$user_data['quantidade']."</td>";
                                echo "<td>".$user_data['preco']."</td>";
                                echo "<td>".$user_data['executado']."</td>";
                               // echo "<td>".$user_data['id']."</td>";
                                echo "<td>
                                    <a href='editarServico.php?cpf=$user_data[cpf]&id=$user_data[id]' class='btn-editar'>Editar</a>
                                    <a href='deleteServico.php?cpf=$user_data[cpf]&id=$user_data[id]' class='btn-excluir'>Excluir</a>
                                </td>";
                                echo "</tr>";
                                echo "<tr>";
                                
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br><br>
            <div class="test">
            <?php
                if(!empty($_GET['cpf']))
                {
                    $cpf=$_GET['cpf'];

                    echo "<a href='AdicionarServicos.php?cpf=$cpf' class='btn'>Adicionar</a>";
                }
            ?>
            </div>
        </div>
    </body>
</html>