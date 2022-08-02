<?php
class Categoria{

    public $id;
    public $descricao;

    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query = "SELECT id, descricao FROM tb_categoria";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }

    public function inserir($descricao){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query="INSERT INTO tb_categoria(descricao) VALUES ('".$descricao."')";
        $conexao->exec($query);
        
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "SELECT id, descricao FROM tb_categoria WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }
    }

    public function alterar($id, $descricao){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "UPDATE tb_categoria SET descricao = '".$descricao."' WHERE id = " .$id;
        $conexao->exec($query);
    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "DELETE FROM tb_categoria WHERE id = " .$id;
        $conexao->exec($query);
    }
    
}