<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Turma.php';
    
    $id_editar = $_GET['CODIGO'];
    $turma = new Turma();
    $linhaEditar = $turma->lista1Turma($id_editar)



?>

<div class="row">
    <div class="col-md-12">
        <h2>Editar Turma</h2>
    </div>
</div>

<form action="turma-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <input type="hidden" name="id" value="<?php echo $id_editar;?>">

            <div class="form-group">
                <label for="sala">Nome da Sala</label>
                <input type="text" name="sala" value="<?php echo $linhaEditar['sala'];?>" class="form-control"  required>
            </div>
            
            
            <div class="form-group">
                <label for="nome">Periodo</label>
                <select class="form-control" name="periodo">
                    <option selected><?php echo $linhaEditar['periodo'];?></option>

                    <option><?php echo 'Diurno Matutino';?></option>
                    <option><?php echo 'Diurno Vespertino';?></option>
                    <option><?php echo 'Noturno';?></option>
                                        
                </select>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>