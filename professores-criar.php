<?php 
    require_once 'cabecalho.php';
    
?>

<h2>Cadastrar Novo Professor</h2>
<br>
<form action="professores-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome" required title="Digite seu Nome">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input name="email" type="email"  class="form-control" placeholder="E-mail" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input name="telefone" type="tel" class="form-control" placeholder="Telefone">
            </div>

            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento</label>
                <input name="dataNascimento" type="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="usuario">Nome de Usuario</label>
                <input name="usuario" type="text" class="form-control" placeholder="Usuario" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input name="senha" type="" class="form-control" placeholder="Usuario" required>
            </div>

            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
