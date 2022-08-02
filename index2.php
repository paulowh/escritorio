<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Aula.php';

    $aula = new Aula();
    $listarAula = $aula->listaAulas();

?>
<div class="row">
    <div class="col-md-12">
        <h2>Seja bem-vindo a Escola Mariuma </h2>
        <p>escolha uma opção para mais detalhes.</p>
    </div>
</div>

<table class="table">
    <thead>
        <th>Data da aula</th>
        <th>Professor</th>
        <th>Matéria</th>
        <th>Turma</th>
        <th>Objetivo</th>
    </thead>
    
    <tbody>
            
        <?php foreach($listarAula as $linha){?>
            <tr>
                <td title="<?php echo $linha['descricao'] ?>"><?php echo $linha['diaAula'];?></td>
                <td><?php echo $linha['professor'];?></td>
                <td><?php echo $linha['materia'];?></td>
                <td><?php echo $linha['turma'];?></td>
                <td><?php echo $linha['objetivo'];?></td>
            </tr>
        <?php }?>

        </tbody>
</table>


<?php require_once 'rodape.php' ?>
