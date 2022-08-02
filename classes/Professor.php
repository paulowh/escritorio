<?php
class Professor{
    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $facebook;
    public $nascimento;
    public $usuario;
    public $senha;
   
    public function listarProfessores(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query = "SELECT id, nome, email, telefone, facebook, nascimento, usuario, senha FROM tb_professores";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }
    
    public function inserirProfessor($nome, $email, $telefone, $facebook, $nascimento, $usuario, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="INSERT INTO tb_professores(nome, email, telefone, facebook, nascimento, usuario, senha) VALUES ('".$nome."', '".$email."', '".$telefone."', '".$facebook."', '".$nascimento."', '".$usuario."', '".$senha."')";
        $conexao->exec($query);
    }

    public function excluirProfessor($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "DELETE FROM tb_professores WHERE id = " .$id;
        $conexao->exec($query);
    }

    public function listar1Professor($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "SELECT id, nome, email, telefone, facebook, nascimento, usuario, senha FROM tb_professores WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }
    }

    public function alterarProfessor($id, $nome, $email, $telefone, $nascimento, $usuario, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "UPDATE tb_professores SET nome = '".$nome."' , email = '".$email."', telefone = '".$telefone."', nascimento = '".$nascimento."', usuario = '".$usuario."', senha = '".$senha."' WHERE id = " .$id;
        $conexao->exec($query);
    }

}
?>