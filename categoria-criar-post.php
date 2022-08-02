<?php

    require_once 'classes/Categoria.php';

    $categoria = new Categoria();

    $campodoFomularioDescricao = $_POST['descricao'];

    $categoria->inserir($campodoFomularioDescricao);

    header('Location:categorias.php')

?>  