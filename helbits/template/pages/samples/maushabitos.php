<?php
    include('./conexaocombanco/banco.php');
    
    session_start();
    $nome = $_POST['nomehabito'];
    $descricao = $_POST['habitodesc'];
    $codusu= $_SESSION['cod_usu'];

    
    $novohabito = "insert into tbhabitos (cod_hab, cod_usu,nome,descricao, tipo, status)
                                         values (null,".$codusu.",'".$nome."','".$descricao."','RUIM','NAO');";

    $insert = $conexao->query($novohabito);

    if($insert) {
        header('Location: principal.php?insert_mau_habito=ok');
    } else {
        header('Location: principal.php?insert_mau_habito=erro');
    }
?>