<?php
    require_once 'cabecalho.php';
    require_once 'classes/Professor.php';

    $professor = new Professor();
    $listaProfessor = $professor->listarProfessores();




?>

<h2>Professores</h2>
<a href="professores-criar.php"  class="btn btn-info">Cadastrar Novo Professor</a>
<br><br>

<table class="table">
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
     
        <th>Data Nascimento</th>
        <th>Usuario</th>
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </thead>
    
    <tbody>
            
        <?php foreach($listaProfessor as $linha){?>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['email'];?> </td>
                <td><?php echo $linha['telefone'];?></td>
                
                <td><?php echo $linha['nascimento'];?></td>
                <td><?php echo $linha['usuario'];?></td>
                
                <td><a href="professores-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>    
                <td><a href="professores-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>

    </tbody>
</table>




<?php require_once 'rodape.php'?>