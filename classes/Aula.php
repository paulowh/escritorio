<?php
class Aula{
    public $id;
    public $diaAula;
    public $turma;
    public $professor;
    public $materia;
    public $objetivo;
    public $descricao;
    public $recurso;

    public function listaAulas(){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=escola","root","");

        $query = "SELECT id, diaAula, turma, professor, materia, objetivo, descricao, recurso FROM tb_aulas";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function inserirAulas($diaAula, $turma, $professor, $materia, $objetivo, $descricao, $recurso){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=escola","root","");

        $query="INSERT INTO tb_aulas(diaAula, turma, professor, materia, objetivo, descricao, recurso) VALUES ('".$diaAula."', '".$turma."', '".$professor."', '".$materia."', '".$objetivo."', '".$descricao."', '".$recurso."')";
        $conexao->exec($query);
    }

    public function listar1aula($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");

        $query = "SELECT id, diaAula, turma, professor, materia, objetivo, descricao, recurso FROM tb_aulas WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }
    }

    public function alterarAula($id, $diaAula, $turma, $professor, $materia, $objetivo, $descricao, $recurso){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");

        $query = "UPDATE tb_aulas SET diaAula = '".$diaAula."' , turma = '".$turma."', professor = '".$professor."', materia = '".$materia."', objetivo = '".$objetivo."', descricao = '".$descricao."', recurso = '".$recurso."' WHERE id = " .$id;
        $conexao->exec($query);
    }

    public function excluirAula($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");

        $query = "DELETE FROM tb_aulas WHERE id = " .$id;
        $conexao->exec($query);
    }

}

?>