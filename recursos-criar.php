<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Categoria.php';

    $categoria = new Categoria();
    $lista = $categoria->listar();
?>

<h2>Cadastrar Novo Recurso</h2>
<br>
<form action="recursos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="nome">Nome do Recurso</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome do Recurso" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade do Recurso</label>
                <input name="quantidade" type="number"  min="0" class="form-control" placeholder="Quantidade do Recurso" required>
            </div>

            <div class="form-group">
                <label for="nome">Categoria do Recurso</label>
                <select class="form-control" name="categoria">

                    <?php foreach($lista as $linha){?>

                        <option ><?php echo $linha['descricao'];?></option>

                    <?php }?>

                </select>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
