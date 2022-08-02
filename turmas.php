<?php
    require_once 'cabecalho.php';
    require_once 'classes/Turma.php';

    $turma = new Turma();
    $listar = $turma->listarTurma();

?>

<h2>Turmas</h2>
<a href="turmas-criar.php"  class="btn btn-info">Cadastrar Nova Turma</a>
<br><br>

<table class="table">
    <thead>
        <th>Sala</th>
        <th>Periodo</th>
        <th>Horario de Entrada</th>
        <th>Horario de Saida</th>
        
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </thead>
    
    <tbody>
            
        <?php foreach($listar as $linha){?>
            <tr>
                <td><?php echo $linha['sala'];?></td>
                <td><?php echo $linha['periodo'];?></td>
                <td><?php echo $linha['horarioInicio'];?></td>
                <td><?php echo $linha['horarioFim'];?></td>
                
                <td><a href="turmas-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>    
                <td><a href="turmas-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>

    </tbody>
</table>




<?php require_once 'rodape.php'?>