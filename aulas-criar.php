<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Turma.php';
    require_once 'classes/Professor.php';
    require_once 'classes/Recurso.php';
    require_once 'classes/Materia.php';
    
    $turma = new Turma();
    $listaTurmas = $turma->listarTurma();

    $professor = new Professor();
    $listarProfessor = $professor->listarProfessores();

    $recurso = new Recurso();
    $listarRecurso = $recurso->listar();

    $materia = new Materia();
    $listarMateria = $materia->listarMaterias();
?>

<h2>Cadastrar Nova Aula</h2>
<br>

<form action="aulas-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            
            <div class="form-group">
                <label for="materia">Matéria</label>
                <select class="form-control" name="materia">
                    <?php foreach($listarMateria as $linha){?>
                        <option ><?php echo $linha['materia'];?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="objetivo">Objetivo da Aula</label>
                <input name="objetivo" type="text" class="form-control" placeholder="Objetivo da aula a ser aplicada" required>
                
            </div>

            <div class="form-group">
                <label for="turmas">Turma</label>
                <select class="form-control" name="turmas">
                    <?php foreach($listaTurmas as $linha){?>
                        <option ><?php echo $linha['sala'];?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="diaAula">Dia da Aula</label>
                <input name="diaAula" type="date" class="form-control" required>
                
            </div>

            <div class="form-group">
                <label for="professor">Professor</label>
                <select class="form-control" name="professor">
                    <?php foreach($listarProfessor as $linha){?>
                        <option ><?php echo $linha['nome'];?></option>
                    <?php }?>
                </select>
            </div>
            


            <div class="form-group">
                <label for="recurso">Recursos</label>
                <select class="form-control" name="recurso" >
                    <?php foreach($listarRecurso as $linha){?>
                        <option><?php echo $linha['nome'];?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição da Aula</label>
                <textarea cols="30" rows="9" class="form-control" name="descricao" placeholder="Faça uma descrição da aula que será aplicada"></textarea>
                
            </div>

            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
