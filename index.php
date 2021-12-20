<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastro de Clientes - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,900;1,100;1,200;1,300;1,800&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-fluid bg">
        <form action="login.php" action="POST">
            <h2 class="titulo_form">Faça seu login aqui!</h2>
            <div class="form-group">
                <label for="">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite o Usuário..." aria-describedby="helpId">
                <small id="helpId" class="text-muted">Digite o nome do Usuário cadastrado.</small>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="text" name="senha" id="senha" class="form-control" placeholder="Digite a senha..." aria-describedby="helpId">
                <small id="helpId" class="text-muted">Sua senha é pessoal e intransferível.</small>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
