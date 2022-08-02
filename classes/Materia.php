<?php
class Materia{
    public $id;
    public $materia;
    public $cargaHorario;
    public $ementa;
    //metodo para a listagem das materias ja cadastradas
    public function listarMaterias(){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query = "SELECT id, materia, carga_horaria, ementa FROM tb_materias";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function inserirMateria($materia, $cargaHorario, $ementa){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="INSERT INTO tb_materias(materia, carga_Horaria, ementa) VALUES ('".$materia."', '".$cargaHorario."', '".$ementa."')";
        $conexao->exec($query);
    }

    public function listar1Materia($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "SELECT id, materia, carga_horaria, ementa FROM tb_materias WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }
    }

    public function alterarMateria($id, $nomeMateria, $cargaHorario, $ementa){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "UPDATE tb_materias SET materia = '".$nomeMateria."' , carga_horaria = '".$cargaHorario."', ementa = '".$ementa."' WHERE id = " .$id;
        $conexao->exec($query);
    }

    public function excluirMateria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "DELETE FROM tb_materias WHERE id = " .$id;
        $conexao->exec($query);
    }

}

?>