<?php
$id_excluir = $_GET['CODIGO'];
require_once 'classes/Categoria.php';
$categoria = new Categoria();
$categoria->excluir($id_excluir);

header('Location:categorias.php')


?>