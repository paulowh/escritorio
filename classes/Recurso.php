<?php
class Recurso{
    public $id;
    public $nome;
    public $quant;
    public $categoria;

    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query = "SELECT id, nome, quantidade, categoria FROM tb_recursos";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }
    
    public function inserir($nome, $quant, $categoria){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query="INSERT INTO tb_recursos(nome, quantidade, categoria) VALUES ('".$nome."', '".$quant."', '".$categoria."')";
        $conexao->exec($query);
        
    }

    public function listar1Recurso($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "SELECT id, quantidade, categoria, nome FROM tb_recursos WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }
    }

    public function alterarRecurso($id, $nome, $quant, $categoria){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "UPDATE tb_recursos SET nome = '".$nome."' , quantidade = '".$quant."', categoria = '".$categoria."' WHERE id = " .$id;
        $conexao->exec($query);
    }
    
    public function excluirRecurso($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "DELETE FROM tb_recursos WHERE id = " .$id;
        $conexao->exec($query);
    }
}
?>