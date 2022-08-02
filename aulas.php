<?php
    require_once 'cabecalho.php';
    require_once 'classes/Aula.php';

    $aula = new Aula();
    $listarAula = $aula->listaAulas();

?>

<h2>Plano de Aula</h2>
<a href="aulas-criar.php"  class="btn btn-info">Adicionar Nova Aula</a>
<br><br>

<table class="table">
    <thead>
        <th>Data</th>
        <th>Professor</th>
        <th>Matéria</th>
        <th>Turma</th>
        <th>Objetivo</th>
        <th class="acao" >Editar</th>
        <th class="acao">Excluir</th>
    </thead>
    
    <tbody>
            
        <?php foreach($listarAula as $linha){?>
            <tr>
                <td title="<?php echo $linha['descricao'] ?>"><?php echo $linha['diaAula'];?></td>
                <td><?php echo $linha['professor'];?></td>
                <td><?php echo $linha['materia'];?></td>
                <td><?php echo $linha['turma'];?></td>
                <td><?php echo $linha['objetivo'];?></td>
                <td><a href="aula-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>    
                <td><a href="aula-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>

        </tbody>
</table>




<?php require_once 'rodape.php'?>