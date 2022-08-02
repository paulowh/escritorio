<?php

    require_once 'classes/Aula.php';

    $aula = new Aula();

    $id = $_POST['id'];
    $diaAula = $_POST['diaAula'];
    $turma = $_POST['turmas'];
    $professor = $_POST['professor'];
    $materia = $_POST['materia'];
    $objetivo = $_POST['objetivo'];
    $descricao = $_POST['descricao'];
    $recurso = $_POST['recurso'];


    echo $diaAula, $turma, $professor, $materia, $objetivo, $descricao, $recurso;

    $aula->alterarAula($id, $diaAula, $turma, $professor, $materia, $objetivo, $descricao, $recurso);

    header('Location:aulas.php')

?>  