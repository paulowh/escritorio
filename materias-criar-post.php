<?php

    require_once 'classes/Materia.php';

    $materia = new Materia();

    $nomeMateria = $_POST['materia'];
    $cargaHorario = $_POST['cargaHorario'];
    $ementa = $_POST['ementa'];

    $materia->inserirMateria($nomeMateria, $cargaHorario, $ementa);

    header('Location:materias.php')

?>  