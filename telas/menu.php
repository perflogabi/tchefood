<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="./style/menu.css">
    <!-- <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>Pizzaria</title>
</head>
<body>

<header>

<div class="container-fluid">

    <div class="navb-logo">
        <img src="./assets/logo.png" alt="Logo" >
        
    </div>

    <div class="navb-items d-none d-xl-flex">

        <div class="item">
            <a href="/tchefood/telas/dashboard.php">Home</a>
        </div>

        <div class="item">
            <a href="/tchefood/telas/pedidos.php">Pedidos</a>
        </div>

        <div class="item">
            <a href="/tchefood/telas/cardapio.php">Cardápio</a>
        </div>

        <div class="item">
            <a href="/tchefood/telas/grafico_pedidos.php">Relatórios</a>
        </div>

        <div class="item-button">
            <a href="logout.php" type="button">Sair</a>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="mobile-toggler d-lg-none">
        <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
            <i class="fa-solid fa-bars"></i>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <img src="./img/logo.png" alt="Logo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>

                <div class="modal-body">
                    
                    <div class="modal-line">
                        <i class="fa-solid fa-house"></i><a href="/">Home</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-bell-concierge"></i><a href="/services">Pedidos</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-file-lines"></i> <a href="/cases">Cardápio</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-circle-info"></i><a href="/about">Relatórios</a>
                    </div>

                    <a href="logout.php" class="navb-button" type="button">Sair</a>
                </div>

                <div class="mobile-modal-footer">
                    
                    <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a target="_blank" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>
</header>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
"></script>

<script src="./Bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>