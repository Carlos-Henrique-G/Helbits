<?php
    include('./conexaocombanco/banco.php');

    $codusu = $_POST['cod_usu'];
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


    $sql = "update tbusuarios set
            nome = '$nome',
            utilizador ='$utilizador',
            dominio = '$dominio', 
            senha = '$senha'
            where cod_usu = $codusu";

    $update = $conexao->query($sql);

    if($update == true) {
        header('Location:configuracoes.php?altera=ok');
    } else {
        header('Location:configuracoes.php?altera=erro');
    }
    
?>