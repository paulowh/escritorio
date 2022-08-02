<?php

    $id = $_GET['CODIGO'];
    require_once 'classes/Aula.php';
    $aula = new Aula();
    $aula->excluirAula($id);

    header('location:aulas.php');

?>