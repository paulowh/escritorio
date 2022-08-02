<?php

    $id_excluir = $_GET['CODIGO'];
    require_once 'classes/Materia.php';
    $materia = new Materia();
    $materia->excluirMateria($id_excluir);

    header('Location:materias.php')


?>