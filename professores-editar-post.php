<?php

    require_once 'classes/Professor.php';

    $professor = new Professor();

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['dataNascimento'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $professor->alterarProfessor($id, $nome, $email, $telefone, $nascimento, $usuario, $senha);


    header('Location:professores.php')

?>  