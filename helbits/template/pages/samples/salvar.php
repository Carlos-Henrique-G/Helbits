<?php
    include('./conexaocombanco/banco.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $utilizador = "";
    $dominio = "";

    for($i = 0;$i < strlen($email); $i++) {
        $char = $email[$i];
        if($char == "@") {
            $array = explode("@",$email);
            $utilizador = $array[0];
            $dominio = "@" . $array[1];
        }
    }

    $novousuario = "insert into tbusuarios (cod_usu,nome,utilizador,dominio,senha)
                                    values (null,'$nome','$utilizador','$dominio','$senha')";

    $insert = $conexao->query($novousuario);

    $usuarioconectado = "select * from tbusuarios where utilizador='$utilizador' and dominio='$dominio' and senha='$senha';";

    $consulta = $conexao->query($usuarioconectado);

    if($insert==true && $consulta-> num_rows > 0) {
        $linha = $consulta->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['cod_usu'] = $linha['cod_usu'];
        $_SESSION['dinheiro'] = $linha['dinheiro'];
        $_SESSION['login'] = 'ok';
        header('Location: principal.php?insert=ok');
    } else {
        header('Location: frmregister.php?insert=erro');
    }
?>