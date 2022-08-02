<?php
require_once 'classes/Professor.php';

$usuario = new Professor();

$lista = $usuario->listarProfessores();

require_once 'cabecalho.php';
?>
<h2>Usuarios</h2>
<a href="professores-criar.php" class="btn btn-info">adicionar usuario</a>
<br><br>

<table class="table">
    <thead>
        <!-- <th>Id</th> -->
        <th>Usuarios</th>
        <th>Senha</th>
        <th class="acao">Alterar</th>
        <th class="acao">Excluir</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){?>
            <tr>
                <!-- <td><?php echo $linha['id'];?></th> -->
                <td><?php echo $linha['usuario'];?></td>
                <td><?php echo $linha['senha'];?></td>
                <td><a href="professores-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>    
                <td><a href="professores-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
require_once 'rodape.php';
?>
