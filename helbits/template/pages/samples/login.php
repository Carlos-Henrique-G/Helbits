<?php
    include('./conexaocombanco/banco.php');

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

    $usuarioconectado = "select * from tbusuarios where utilizador='$utilizador' and dominio='$dominio' and senha='$senha';";

    $consulta = $conexao->query($usuarioconectado);
            
    if($consulta->num_rows > 0) {
        $linha = $consulta->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['cod_usu'] = $linha['cod_usu'];
        $_SESSION['dinheiro'] = $linha['dinheiro'];
        $_SESSION['xp'] = $linha['experiencia'];
        $_SESSION['lvl'] = $linha['nivel'];
        $_SESSION['login']='ok';
        header('Location: principal.php?login=ok');
    } else {
        header('Location: frmlogin.php?login=erro');
    }
?>