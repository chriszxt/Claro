<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Claro | Atendimento Digital</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<header>
    Claro | Atendimento Digital
</header>

<nav>
    <a href="index.php">
        <i class="fa-solid fa-house"></i>
        Painel
    </a>

    <a href="faturas.php">
        <i class="fa-regular fa-newspaper"></i>
        Faturas
    </a>

    <a href="protocolos.php">
        <i class="fa-solid fa-headset"></i>
        Protocolos
    </a>

    <a href="agendamento.php">
        <i class="fa-regular fa-calendar"></i>
        Visitas
    </a>

    <a href="historico.php">
        <i class="fa-solid fa-clock-rotate-left"></i>
        Histórico
    </a>

    <a href="perfil.php">
        <i class="fa-regular fa-user"></i>
        Perfil
    </a>
</nav>

<main>

    <h1>Olá, Christian!</h1>

    <div class="cards">

        <div class="card">
            <h3>Faturas em aberto</h3>
            <h2>R$ 256,80</h2>
        </div>

        <div class="card">
            <h3>Protocolos abertos</h3>
            <h2>2</h2>
        </div>

        <div class="card">
            <h3>Visitas agendadas</h3>
            <h2>1</h2>
        </div>

        <div class="card">
            <h3>Atendimentos</h3>
            <h2>5</h2>
        </div>

    </div>

    <h3>Últimos Protocolos</h3>

    <table>

        <tr>
            <th>Protocolo</th>
            <th>Descrição</th>
            <th>Status</th>
        </tr>

        <tr>
            <td>#1025</td>
            <td>Instalação de internet</td>
            <td>Aberto</td>
        </tr>

        <tr>
            <td>#1023</td>
            <td>Falha na conexão</td>
            <td>Em andamento</td>
        </tr>

        <tr>
            <td>#1018</td>
            <td>Problema no aplicativo</td>
            <td>Finalizado</td>
        </tr>

    </table>

</main>

</body>
</html>