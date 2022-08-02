<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Categoria.php';

    $categoria = new Categoria();
    $lista = $categoria->listar();
?>

<h2>Cadastrar Nova Matéria</h2>
<br>
<form action="materias-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="materia">Nome da Matéria</label>
                <input name="materia" type="text" class="form-control" placeholder="Nome da Matéria" required>
            </div>

            <div class="form-group">
                <label for="cargaHorario">Carga Horaria</label>
                <input name="cargaHorario" type="number"  min="0" class="form-control" placeholder="Carga Horaria" required>
            </div>
            
            <div class="form-group">
                <label for="ementa">Resumo da Matéria</label>
                <textarea cols="30" rows="9" class="form-control" name="ementa" placeholder="Ementa"></textarea>
                
            </div>

            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
