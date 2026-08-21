<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Claro | Atendimento Digital</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body { display: flex; background: #f5f5f5; }
        
        header { 
            position: fixed; top: 0; left: 0; right: 0; height: 60px;
            background: #e30613; color: white; padding: 0 20px; 
            display: flex; align-items: center; font-size: 20px; font-weight: bold; z-index: 10;
        }

        nav { width: 200px; height: 100vh; background: #202b35; padding-top: 70px; position: fixed; }
        nav a { display: block; padding: 12px 20px; color: white; text-decoration: none; }
        nav a:hover { background: #e30613; }

        main { margin-left: 200px; padding: 80px 30px 30px; width: 100%; }

        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin: 20px 0; }
        .card { background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .card h2 { color: #e30613; margin-top: 5px; }

        table { width: 100%; background: white; border-collapse: collapse; border-radius: 8px; overflow: hidden; }
        th, td { padding: 12px 15px; border-bottom: 1px solid #eee; text-align: left; }
        th { background: #fafafa; }
    </style>
</head>
<body>

<header>Claro | Atendimento Digital</header>

<nav>
    <a href="index.php"> Painel</a>
    <a href="faturas.php"> Faturas</a>
    <a href="protocolos.php"> Protocolos</a>
    <a href="agendamento.php"> Visitas</a>
    <a href="historico.php"> Histórico</a>
    <a href="perfil.php"> Perfil</a>
</nav>

<main>
    <h1>Olá, Christian!</h1>

    <div class="cards">
        <div class="card"><h3>Faturas em aberto</h3><h2>R$ 256,80</h2></div>
        <div class="card"><h3>Protocolos abertos</h3><h2>2</h2></div>
        <div class="card"><h3>Visitas agendadas</h3><h2>1</h2></div>
        <div class="card"><h3>Atendimentos</h3><h2>5</h2></div>
    </div>

    <h3>Últimos Protocolos</h3>
    <table>
        <tr><th>Protocolo</th><th>Descrição</th><th>Status</th></tr>
        <tr><td>#1025</td><td>Instalação de internet</td><td>Aberto</td></tr>
        <tr><td>#1023</td><td>Falha na conexão</td><td>Em andamento</td></tr>
        <tr><td>#1018</td><td>Problema no aplicativo</td><td>Finalizado</td></tr>
    </table>
</main>

</body>
</html>