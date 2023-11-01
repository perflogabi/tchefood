<!-- <?php
    session_start();

    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
        header("Location: index.php"); exit;
    }

    include ('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
            WHERE usuario = '($usuario)'
            AND senha = '($senha)'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd >0) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $nome;
        print "<script>location href='dashboard.php';</script>";
    }else {
        print "<script>alert('usuario e/ou senha incorretos)</script>";
        print "<script>location href='index.php';</script>";
    }





?> -->