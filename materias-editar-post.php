<?php
    require_once 'Classes/Materia.php';
    
    $id = $_POST['id'];
    $nomeMateria = $_POST['nomeMateria'];
    $cargaHorario = $_POST['cargaHorario'];
    $ementa = $_POST['ementa'];

    $materia = new Materia();
    $materia->alterarMateria($id, $nomeMateria, $cargaHorario, $ementa);

    header('Location:materias.php');
?>