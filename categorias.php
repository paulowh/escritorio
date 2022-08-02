<?php
    require_once 'classes/Categoria.php';

    $categoria = new Categoria();
    $lista = $categoria->listar();

    require_once 'cabecalho.php';
?>

<h2>Categorias</h2>
<a href="categorias-criar.php"  class="btn btn-info">Adicionar categoria</a>
<br><br>

<table class="table">
    <thead>
        <!--<th>Id</th>-->
        <th>Categoria</th>
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </thead>
    
    <tbody>
        <?php foreach($lista as $linha){?>
            <tr>
                <!--<td><?php echo $linha['id'];?></th>-->
                <td><?php echo $linha['descricao'];?></td>
                <td><a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a></td>
                <td><a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once 'rodape.php';
?>
