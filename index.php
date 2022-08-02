<?php require_once 'cabecalho-login.php' ?>

<h2 style = "text-align: center;">Faça o login para acessar ao sistema de aulas</h2>

<div class="container" style = "border: 3px solid; text-align: center; height: 170px; width: 600px;">
    <br>
    <form method = "post" action = "validar-login.php">
        <label for="usuario"><b>Usuário:</b></label>
        <input type="text" placeholder="Digite o seu usuário" name="usuario" required>

        <label for="senha"><b>Senha:</b></label>
        <input type="password" placeholder="Digite sua senha" name="senha" required>
        <br>
        <?php 
            if(isset($_GET['mensagem'])){
                echo 'Atenção: Login ou Senha invalida!!!';
            }

        ?>
        <br>
        <button type="submit">Login</button>
    </form>

        <strong>
            <!-- <a href="usuarios-criar.php">Não tem login? Clique aqui para se cadastrar!</a> -->
        </strong>
</div>

<?php require_once 'rodape.php' ?>