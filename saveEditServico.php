<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $cpf = $_POST['cpf'];
        $tipo = $_POST['tipo'];
        $servico = $_POST['servico'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $executado = $_POST['executado'];

        $sqlUpdate = "UPDATE servicos SET cpf='$cpf',tipo='$tipo',servico='$servico',quantidade='$quantidade',preco='$preco',executado='$executado'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header("Location: servicos.php?cpf=$cpf");
?>