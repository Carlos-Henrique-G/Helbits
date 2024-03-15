<?php
    include('./conexaocombanco/banco.php');
    
    session_start();
    $nome = $_POST['nomehabito'];
    $descricao = $_POST['habitodesc'];
    $codusu= $_SESSION['cod_usu'];

    echo $codusu;
    $novohabito = "insert into tbhabitos (cod_hab, cod_usu, descricao, tipo)
                                         values (null,".$codusu.",".$descricao.",'BOM');";

    $insert = $conexao->query($novohabito);

    if($insert) {
        header('Location: principal.php');
    } else {
        header('Location: frmlogin.php');
    }
?>