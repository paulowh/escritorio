<?php

    require_once 'classes/Recurso.php';

    $recurso = new Recurso();

    $nome = $_POST['nome'];
    $quant = $_POST['quantidade'];
    $categoria = $_POST['categoria'];

    $recurso->inserir($nome, $quant, $categoria);

    header('Location:recursos.php')

?>  