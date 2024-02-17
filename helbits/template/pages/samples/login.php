<?php
    include('./conexaocombanco/banco.php');

    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from tbusuarios where email='$usuario' and senha='$senha'";

    $consulta = $conexao->query($sql);

    if($consulta->num_rows > 0) {
        header('Location: principal.php?login=ok');
    } else {
        header('Location: frmlogin.php?login=erro');
    }
?>