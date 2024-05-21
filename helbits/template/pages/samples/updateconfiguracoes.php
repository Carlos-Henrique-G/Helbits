<?php
    include('./conexaocombanco/banco.php');
    
    session_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha= $_SESSION['senha'];

    
    $novosdados = "update  tbhabitos (cod_hab, cod_usu,nome,descricao, tipo)
                                         values (null,".$codusu.",'".$nome."','".$descricao."','BOM');";

    $update = $conexao->query($novosdados);

    if($insert) {
        header('Location: principal.php?alteracao=ok');
    } else {
        header('Location: principal.php?alteracao=erro');
    }
?>