<?php

    $id_excluir = $_GET['CODIGO'];
    require_once 'classes/Recurso.php';
    $recurso = new Recurso();
    $recurso->excluirRecurso($id_excluir);

    header('Location:recursos.php')


?>