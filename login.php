<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Sistema de gerenciamento de Patrimonio</h2>
        <p>Faça o seu plano agora mesmo!</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="POST" action="acesso.php">
                <div class="form-group">
                    <label>Usuário:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Informe o Usuário">
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Informe sua Senha">
                </div>
                <button type="submit" class="btn btn-black" id="botlogin">Entrar</button>
                <div id="result"></div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    
    });
</script>