<?php
    require_once 'cabecalho.php';
    require_once 'classes/Categoria.php';
    $id = $_GET['CODIGO'];
    $categoria = new Categoria();
    $linha = $categoria->listar1Categoria($id);
?>

<h2>Alterar Categoria</h2>

<form name="alterar-categoria" action="categoria-editar-post.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Descrição:
    <input name="descricao" value="<?php echo $linha['descricao'];?>">
    <button type="submit">Salvar</button>
</form>

<?php
    require_once 'rodape.php';
?>