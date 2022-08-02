<?php
    require_once 'cabecalho.php';
    require_once 'classes/Materia.php';

    $id_editar = $_GET['CODIGO'];

    $materia = new Materia();
    $linha = $materia->listar1Materia($id_editar);

?>

<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>

<form action="materias-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <input type="hidden" name="id" value="<?php echo $id_editar;?>">

            <div class="form-group">
                <label for="materia">Nome da Materia</label>
                <input type="text" name="nomeMateria" value="<?php echo $linha['materia'];?>" class="form-control" placeholder="Nome da Matéria" required>
            </div>
            
            <div class="form-group">
                <label for="cargaHorario"> Carga Horaria</label>
                <input type="number" name="cargaHorario" value="<?php echo $linha['carga_horaria'];?>" min="0" class="form-control" placeholder="CargaHoraria" required>
            </div>

            <div class="form-group">
                <label for="ementa">Resumo</label>
                <textarea cols="30" rows="10" class="form-control" name="ementa"><?php echo $linha['ementa'];?></textarea>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>