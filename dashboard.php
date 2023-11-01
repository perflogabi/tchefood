<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="./dash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<body>
    <div class="container-principal">
        <?php
            include './telas/menu.php';
         ?>
        <div class="img">
            <img src="./img/cortadapf.jpg" alt="pizza" >
            
        </div>
        
    </div>

        
        
    </div>
</body>
</html>