<?php
class Connect
{

    public $id;
    public $usuario;
    public $senha;

    public function listar()
    {
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco", "root", "");

        $query = "SELECT id, usuario, senha FROM tb_usuarios";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function conectar()
    {

        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}
