<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Turma.php';
    require_once 'classes/Professor.php';
    require_once 'classes/Recurso.php';
    require_once 'classes/Materia.php';
    require_once 'classes/Aula.php';
    
    $turma = new Turma();
    $listaTurmas = $turma->listarTurma();

    $professor = new Professor();
    $listarProfessor = $professor->listarProfessores();

    $recurso = new Recurso();
    $listarRecurso = $recurso->listar();

    $materia = new Materia();
    $listarMateria = $materia->listarMaterias();

    $id = $_GET['CODIGO'];
    $aula = new Aula();
    $listar1Aula = $aula->listar1aula($id);

    
?>

<h2>Cadastrar Nova Aula</h2>
<br>

<form action="aulas-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <input type="hidden" value="<?php echo $id?>" name="id">
            
            <div class="form-group">
                <label for="materia">Matéria</label>
                <select class="form-control" name="materia">
                    <!-- <option selected><?php echo $listar1Aula['materia']?></option> -->
                    <?php foreach($listarMateria as $linha){?>
                        <?php if($listar1Aula['materia']==$linha['materia']){ ?>
                            <option selected><?php echo $linha['materia'];?></option>
                        <?php }else{ ?>
                            <option ><?php echo $linha['materia'];?></option>
                        <?php }?>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="objetivo">Objetivo da Aula</label>
                <input name="objetivo" type="text" value="<?php echo $listar1Aula['objetivo']?>" class="form-control" placeholder="Objetivo da aula a ser aplicada" required>
                
            </div>

            <div class="form-group">
                <label for="turmas">Turma</label>
                <select class="form-control" name="turmas">
                    <?php foreach($listaTurmas as $linha){?>
                        <?php if($listar1Aula['turma'] == $linha['sala']){?>
                            <option selected><?php echo $linha['sala'];?></option>
                        <?php }else{ ?>
                        <option ><?php echo $linha['sala'];?></option><?php }?>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="diaAula">Dia da Aula</label>
                <input name="diaAula" value="<?php echo $listar1Aula['diaAula']?>" type="date" class="form-control" required>
                
            </div>

            <div class="form-group">
                <label for="professor">Professor</label>
                <select class="form-control" name="professor">
                    <?php foreach($listarProfessor as $linha){?>
                        <?php if($listar1Aula['professor'] == $linha['nome']){ ?>
                            <option selected><?php echo $linha['nome'];?></option>
                        <?php }else{ ?>
                            <option><?php echo $linha['nome'];?></option>
                        <?php }?>
                    <?php }?>
                </select>
            </div>
            
            
            <div class="form-group">
                <label for="recurso">Recursos</label>
                <select class="form-control" name="recurso">
                    <!-- <option selected><?php echo $listar1Aula['recurso']?></option> -->
                    <?php foreach($listarRecurso as $linha){?>
                        <?php if($listar1Aula['recurso'] == $linha['nome']){ ?>
                            <option selected><?php echo $linha['nome'];?></option>
                        <?php }else{ ?>
                            <option><?php echo $linha['nome'];?></option>
                        <?php }?>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição da Aula</label>
                <textarea cols="30" rows="9" class="form-control" name="descricao" placeholder="Faça uma descrição da aula que será aplicada"><?php echo $listar1Aula['descricao']?></textarea>
                
            </div>

            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
