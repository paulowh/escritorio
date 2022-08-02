<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Professor.php';

    $id_editar = $_GET['CODIGO'];

    $professor = new Professor();
    $listarProf = $professor->listar1Professor($id_editar);
    
?>

<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>

<form action="professores-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <input type="hidden" name="id" value="<?php echo $id_editar;?>">

            <div class="form-group">
                <label for="nome">Nome do Professor</label>
                <input type="text" name="nome" value="<?php echo $listarProf['nome'];?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input name="email" type="email"  value="<?php echo $listarProf['email'];?>" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input name="telefone" type="tel" class="form-control" value="<?php echo $listarProf['telefone'];?>" required>
            </div>

            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento</label>
                <input name="dataNascimento" type="date" class="form-control" value="<?php echo $listarProf['nascimento'];?>" required>
            </div>

            <div class="form-group">
                <label for="usuario">Nome de Usuario</label>
                <input name="usuario" type="text" class="form-control" value="<?php echo $listarProf['usuario'];?>" required>
            </div>

            <div class="form-group">
                <label for="senha">Alterar Senha</label>
                <input name="senha" type="password" class="form-control" value="<?php echo $listarProf['senha'];?>" required>
            </div>
            
            

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>