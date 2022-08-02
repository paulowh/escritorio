<?php
    require_once 'Classes/Recurso.php';
    $id = $_POST['id'];
    $quantidade = $_POST['quantidade'];
    $categoria = $_POST['categoria'];
    $nome = $_POST["nome"];
    $recurso = new Recurso();
    $recurso->alterarRecurso($id, $nome, $quantidade, $categoria);

    header('Location:recursos.php');
?>