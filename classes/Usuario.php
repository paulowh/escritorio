<?php
class Usuario{

    public $id;
    public $usuario;
    public $senha;

    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query = "SELECT id, usuario, senha FROM tb_usuarios";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($usuario, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        
        $query="INSERT INTO tb_usuarios(usuario, senha) VALUES ('".$usuario."', '".$senha."')";

               
        $conexao->exec($query);
        
    }

    public function validarLogin($usuario, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");

        $query = "SELECT * FROM tb_professores WHERE usuario = '".$usuario."' AND senha = '".$senha."'";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $um){
            return $um;
        }
    }
}