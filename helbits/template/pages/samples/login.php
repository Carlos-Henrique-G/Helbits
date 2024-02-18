<?php
    include('./conexaocombanco/banco.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarioconectado = "select * from tbusuarios where email='$email' and senha='$senha'";

    $consulta = $conexao->query($usuarioconectado);

    if($consulta->num_rows > 0) {
        session_start();
        $_SESSION['login']='ok';
        header('Location: principal.php?login=ok');
    } else {
        header('Location: frmlogin.php?login=erro');
    }
?>