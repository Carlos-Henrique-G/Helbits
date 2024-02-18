<?php
    include('./conexaocombanco/banco.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $novousuario = "insert into tbusuarios (cod_usu,nome,senha,email)
                                    values (null,'$nome','$senha','$email')";

    $insert = $conexao->query($novousuario);

    $usuarioconectado = "select * from tbusuarios where email='$email' and senha='$senha'";

    $consulta = $conexao->query($usuarioconectado);

    if($insert==true && $consulta-> num_rows > 0) {
        session_start();
        $_SESSION['login'] == 'ok';
        header('Location: principal.php?insert=ok');
    } else {
        header('Location: register.php?insert=erro');
    }
?>