<?php

class Turma{

    public $turma;
    public $horario;
    public $horaEntrada;
    public $horaSaida;

    public function listarTurma(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query = "SELECT id, sala, periodo, horarioInicio, horarioFim  FROM tb_turma";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }

    public function inserirTurma($turma, $horario, $horaEntrada, $horaSaida){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query="INSERT INTO tb_turma(sala, periodo, horarioInicio, horarioFim) VALUES ('".$turma."', '".$horario."', '".$horaEntrada."', '".$horaSaida."')";
        $conexao->exec($query);
    }

    public function lista1Turma($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "SELECT id, sala, periodo FROM tb_turma WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }
    }

    public function alterarTurma($id, $turma, $horario, $horaEntrada, $horaSaida){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "UPDATE tb_turma SET sala = '".$turma."' , periodo = '".$horario."', horarioInicio = '".$horaEntrada."', horarioFim = '".$horaSaida."' WHERE id = " .$id;
        $conexao->exec($query);
    }
    
    public function excluirTurma($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "DELETE FROM tb_turma WHERE id = " .$id;
        $conexao->exec($query);
    }


}


?>