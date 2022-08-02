<?php

    require_once 'classes/Turma.php';
    $turma = new Turma();

    $sala = $_POST['sala'];
    $horario = $_POST['horario'];
    
    $horaE = '';
    $horaS = '';

    if($horario == 'Diurno Matutino'){
        $horaE = '07:00';
        $horaS = '12:20';
    }elseif($horario == 'Diurno Vespertino'){
        $horaE = '13:00';
        $horaS = '18:20';
    }elseif($horario == 'Noturno'){
        $horaE = '19:00';
        $horaS = '22:30';
    }

    $inserir = $turma->inserirTurma($sala, $horario, $horaE, $horaS);

    echo $horaE;
    echo $horaS;



    header('Location:turmas.php')

?>  