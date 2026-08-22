<?php

session_start();

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM cliente WHERE email = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {

        $cliente = $resultado->fetch_assoc();

        if (password_verify($senha, $cliente["senha"])) {

            $_SESSION["id_cliente"] = $cliente["id_cliente"];
            $_SESSION["nome"] = $cliente["nome"];
            $_SESSION["email"] = $cliente["email"];

            header("Location: index.php");
            exit;

        } else {
            $erro = "Senha incorreta.";
        }

    } else {
        $erro = "E-mail não encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login">

    <h1>Claro</h1>

    <h2>Atendimento Digital</h2>

    <?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>

    <form method="POST">

        <input
            type="email"
            name="email"
            placeholder="E-mail"
            required
        >

        <input
            type="password"
            name="senha"
            placeholder="Senha"
            required
        >

        <button type="submit">
            Entrar
        </button>

    </form>

    <p>
        Ainda não possui uma conta?
        <a href="cadastro.php">Criar conta</a>
    </p>

</div>

</body>
</html>