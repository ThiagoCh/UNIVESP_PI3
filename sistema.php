<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: Login.php');
    }
    $logado = $_SESSION['usuario'];

    $sql = "SELECT * FROM cliente ORDER BY nome";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema</title>
        <link rel="stylesheet" href="sistema.css">
    </head>
    <body>
        <div class="d-flex">
            <a href="sair.php" class="btn-danger">Sair</a>
        </div>
        <div class="tabelaClientes">
            <h1>Clientes</h1>
            <table class="table">
                <thread>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col"></th>
                    </tr>
                </thread>
                <tbody>
                  <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['cpf']."</td>";
                            echo "<td>".$user_data['tel']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['sexo']."</td>";
                            echo "<td>".$user_data['endereco']."</td>";
                            echo "<td>".$user_data['cep']."</td>";
                            echo "<td>".$user_data['cidade']."</td>";
                            echo "<td>".$user_data['estado']."</td>";
                            echo "<td>
                                <a href='servicos.php?cpf=$user_data[cpf]' class='btn-editar'>Serviços</a>
                                <a href='editar.php?cpf=$user_data[cpf]' class='btn-editar'>Editar</a>
                                <a href='delete.php?cpf=$user_data[cpf]' class='btn-excluir'>Excluir</a>
                            </td>";
                            echo "</tr>";
                            
                        }
                  ?>
                </tbody>
            </table>
            <div class="adicionar">
                <br>
                <a href="Cliente.php" class="btn">Adicionar</a>
            </div>
        </div>
    </body>
</html>