<?php
include('./conexaocombanco/banco.php');
session_start();
$compra = $_POST['skin'];
$codusu = $_SESSION['cod_usu'];
$sql = "insert into inventario_skins (cod_inventario,cod_usu,cod_skin)
                                    values (null,'$codusu','$compra')";

    

    $insert = $conexao->query($sql);
    if($insert == true){
        header('location:personagem.php');
    }
?>