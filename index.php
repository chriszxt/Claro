<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claro - Atendimento Digital</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-body">

    <div class="login-container">

     <div class="login-logo">
       <span>Claro</span>
       <h2>Atendimento Digital</h2>
        </div>

        <div class="login-box">
            <h1>Bem-vindo!</h1>
            <p>Acesse sua conta para acompanhar seus atendimentos.</p>

            <form action="dashboard.php" method="POST">

                <label for="email">E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email"
                    placeholder="Digite seu e-mail"
                    required
                >

                <label for="senha">Senha</label>
                <input 
                    type="password" 
                    id="senha" 
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >

                <button type="submit" class="btn-login">
                    Entrar
                </button>

            </form>

            <a href="#" class="forgot">
                Esqueci minha senha
            </a>

            <p class="cadastro">
                Ainda não possui uma conta?
                <a href="#">Cadastre-se</a>
            </p>

        </div>

    </div>

</body>
</html>