<?php
    include('./conexaocombanco/banco.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into tbusuarios (cod_usu,nome,senha,email)
                                    values (null,'$nome','$senha','$email')";

    $insert = $conexao->query($sql);

    if($insert==true) {
        echo 'Insert realizado com sucesso';
    } else {
        echo 'Erro ao inserir';
    }
?>