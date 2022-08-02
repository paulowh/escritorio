<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Recurso.php';

    $recurso = new Recurso();
    $lista = $recurso->listar();
?>

<h2>Recursos</h2>
<a href="recursos-criar.php" class="btn btn-info">Criar Novo Produto</a>
<br><br>

<table class="table">
    
    <thead>
        <tr>
            <!--<th>Id</th>-->
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th class="acao">Editar</th>
            <th class="acao">Excluir</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($lista as $linha){?>
            <tr>
                <!--<td><?php echo $linha['id'];?></th>-->
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['quantidade'];?></th>
                <td><?php echo $linha['categoria'];?></td>
                <td><a href="recursos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>
                <td><a href="recursos-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>
    </tbody>

</table>

<?php require_once 'rodape.php' ?>
