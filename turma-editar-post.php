<?php
    require_once 'Classes/Turma.php';
    
    $id = $_POST['id'];
    $horario = $_POST['periodo'];
    $sala = $_POST['sala'];


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


    $turma = new Turma();
    $turma->alterarTurma($id, $sala, $horario, $horaE, $horaS);

    header('location: turmas.php')
    
?>