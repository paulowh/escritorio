<?php

    require_once 'classes/Professor.php';

    $professor = new Professor();

  
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $facebook = $_POST['fb'];
    $nascimento = $_POST['dataNascimento'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $professor->inserirProfessor($nome, $email, $telefone, $facebook, $nascimento, $usuario, $senha);


    header('Location:professores.php')

?>  