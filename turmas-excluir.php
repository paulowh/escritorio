<?php

    $id = $_GET['CODIGO'];
    require_once 'classes/Turma.php';
    $turma = new Turma();
    $turma->excluirTurma($id);

    header('location:turmas.php');

?>