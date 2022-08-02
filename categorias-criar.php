<?php require_once 'cabecalho.php';?>
<h2>Criar nova categoria</h2>

<form action="categoria-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input name="descricao" type="text" class="form-control" placeholder="Descrição" required>
            </div>


            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php';?>