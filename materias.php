<?php
    require_once 'cabecalho.php';
    require_once 'classes/Materia.php';

    $materia = new Materia();
    $listaMateria = $materia->listarMaterias();

?>

<h2>Materias</h2>
<a href="materias-criar.php"  class="btn btn-info">Adicionar Materia</a>
<br><br>

<table class="table">
    <thead>
        <th>Materia</th>
        <th>Carga Horaria</th>
        <th>Ementa</th>
        <th class="acao" >Editar</th>
        <th class="acao">Excluir</th>
    </thead>
    
    <tbody>
            
        <?php foreach($listaMateria as $linha){?>
            <tr>
                <td><?php echo $linha['materia'];?></td>
                <td><?php echo $linha['carga_horaria'];?> horas</td>
                <td><?php echo $linha['ementa'];?></td>
                <td><a href="materias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>    
                <td><a href="materias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>

        <!--
        <tr>
            <td>Matemática Instrumental</th>
            <td>60 Horas</td>
            <td> <p>Matéria onde é abordado conceitos matemáticos básicos, para que possamos aprender</td>
            <td><a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a></td>    
            <td><a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        -->
    </tbody>
</table>




<?php require_once 'rodape.php'?>