<?php
include_once "connect.php";
$acao = $_GET["acao"];
session_start();
$usuario_id = $_SESSION['id'];

$conexao = new Connection();

// Inserir dados de usuarios
if ($acao == 1) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql1 = "SELECT * FROM usuarios WHERE email= '$email'";
    $result = $conexao->Execute($sql1);

    if (sizeof($result) > 0) {
        header("location: register.php?acao=1");
        die();
    } else {
        $sql = "INSERT INTO usuarios(nome,senha,email) VALUES ('$nome','$senha','$email')";
        $conexao->Execute($sql);
        header("location: view.php?acao=1");
        die();
    }
}

// Inserir tarefas
if ($acao == 2) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data_criacao = $_POST['data_criacao'];
    $data_conclusao = $_POST['data_conclusao'];

    $sql1 = "SELECT * FROM tarefas WHERE titulo= '$titulo'";
    $result = $conexao->Execute($sql1);

    if (sizeof($result) > 0) {
        header("location: tasks.php?acao=1");
        die();
    } else {
        $sql = "INSERT INTO tarefas(usuario_id,titulo,descricao,data_criacao,data_conclusao) VALUES ('$usuario_id','$titulo','$descricao','$data_criacao','$data_conclusao')";
        $conexao->Execute($sql);
        header("location: view.php?acao=2");
        die();
    }
}

// Remover tarefa
else if ($acao == 3) {
    $id = $_GET['id'];

    $sql = "DELETE from tarefas where id = $id";
    $conexao->Execute($sql);

    header("location: view.php?acao=3");
    die();
}

//Alterar tarefa
else if ($acao == 4) {
    $id = $_GET['id'];

    $titulo = $_POST['novoTitulo'];
    $descricao = $_POST['novaDescricao'];
    $data_criacao = $_POST['novaDtCriacao'];
    $data_conclusao = $_POST['novaDtConclusao'];

    $sql = "UPDATE tarefas SET titulo='$titulo',descricao='$descricao', data_criacao='$data_criacao', data_conclusao='$data_conclusao' WHERE id=$id";
    $conexao->Execute($sql);
    header("location: view.php?acao=4");
    die();
}
