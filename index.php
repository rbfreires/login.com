<?php
include('includes/header.php');
?>
<nav class="topo">
    <div class="container-fluid navfluid">
        <a class="navbar-brand" href="#"><img src="img/userpassword_deusuari_787.png" alt="brand_img" width="100px"></a>
        <h1 class="title_navbar">Cadastro de Clientes - Login</h1>
    </div>
</nav>

<div class="container-fluid bg">
    <form action="login.php" method="POST">
        <h2 class="titulo_form">Faça seu login aqui!</h2>
        <fieldset>
            <div class="form-group">
                <label for="">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite o Usuário..." aria-describedby="helpId">
                <small id="helpId" class="text-muted">Digite o nome do Usuário cadastrado.</small>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a senha..." aria-describedby="helpId">
                <small id="helpId" class="text-muted">Sua senha é pessoal e intransferível.</small>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </fieldset>
    </form>
</div>
<?php
include('includes/footer.php');
?>
