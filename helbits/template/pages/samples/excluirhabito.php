<?php
    include('./conexaocombanco/banco.php');

    session_start();

    $habitoid = $_GET['id'];

    for($i = 0;$i < count($_SESSION['habitosids']); $i++) {
        if($_SESSION['habitosids'][$i] == $habitoid) {
            $sql_deletar_habitos = "delete from tbhabitos
                              where cod_hab = $habitoid;";
            $excluirhabitos = $conexao->query($sql_deletar_habitos);
            if($excluirhabitos == true) {
                header('Location: principal.php?habitodeletado;');
            } else {
                header('Location: principal.php?erroaodeletarhabito;');
            }
        }
    }
?>