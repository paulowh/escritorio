<?php

    $id_excluir = $_GET['CODIGO'];
    require_once 'classes/Professor.php';
    $professor = new Professor();
    $professor->excluirProfessor($id_excluir);

    header('Location:professores.php')


?>