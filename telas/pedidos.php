<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="./style/peddos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<body>
        <?php
            include './telas/menu.php';
         ?>
    
    <div id="status_pedidos">
        <h1>Status de Pedidos</h1>
        <div class="pedido">
            <h2>Pedido #12345</h2>
            <p>Status: <span id="status-12345">Aguardando pagamento</span></p>
            <button onclick="atualizarStatus(12345)">Atualizar Status</button>
        </div>
            <div class="pedido">
                <h2>Pedido #67890</h2>
                <p>Status: <span id="status-67890">Em processamento</span></p>
                <button onclick="atualizarStatus(67890)">Atualizar Status</button>
            </div>
        </div>
</body>
</html>

