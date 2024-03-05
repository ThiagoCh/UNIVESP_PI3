<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $sexo = $_POST['genero'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $sqlUpdate = "UPDATE cliente SET nome='$nome', cpf='$cpf',tel='$tel',email='$email',sexo='$sexo',endereco='$endereco',cep='$cep',cidade='$cidade',estado='$estado'
        WHERE cpf='$cpf'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: sistema.php');
?>