<?php

    require_once 'classes/Aula.php';

    $aula = new Aula();

    $diaAula = $_POST['diaAula'];
    $turma = $_POST['turmas'];
    $professor = $_POST['professor'];
    $materia = $_POST['materia'];
    $objetivo = $_POST['objetivo'];
    $descricao = $_POST['descricao'];
    $recurso = $_POST['recurso'];


    echo $diaAula, $turma, $professor, $materia, $objetivo, $descricao, $recurso;

    $aula->inserirAulas($diaAula, $turma, $professor, $materia, $objetivo, $descricao, $recurso);

    header('Location:aulas.php')

?>  