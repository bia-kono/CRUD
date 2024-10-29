<?php
require 'conexao.php'; // puxa a conexao.php do bd

if (isset($_POST['create_paciente'])) {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $data_nascimento = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $rg = mysqli_real_escape_string($conexao, $_POST['rg']);
    $genero = mysqli_real_escape_string($conexao, $_POST['genero']);
    $tipo_sanguinea = mysqli_real_escape_string($conexao, $_POST['tipo_sanguinea']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);

    // input dos dados no bd.
    $query = "INSERT INTO cadastro (nome, data_nascimento, cpf, rg, genero, tipo_sanguinea, endereco, telefone) 
              VALUES ('$nome', '$data_nascimento', '$cpf', '$rg', '$genero', '$tipo_sanguinea', '$endereco', '$telefone')";

    if (mysqli_query($conexao, $query)) {
        echo "<script>alert('Paciente cadastrado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar paciente: " . mysqli_error($conexao) . "');</script>";
    }
}
?>