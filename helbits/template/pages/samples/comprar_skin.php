<?php
include('./conexaocombanco/banco.php');
session_start();
$compra = $_POST['skin'];
$codusu = $_SESSION['cod_usu'];
$sql2 = "select * from tbusuarios where cod_usu = $codusu";
$sql3 = "select * from tbskins where cod_skin = $compra";

$select2 = $conexao->query($sql3);
$linha2 = $select2->fetch_array(MYSQLI_ASSOC);

$select = $conexao->query($sql2);
$linha = $select->fetch_array(MYSQLI_ASSOC);

if($linha['dinheiro'] >= $linha2['preco'] ){
$dinheiro = $linha['dinheiro'];
$preco = $linha2['preco'];
$dinheirofinal = $dinheiro - $preco;
$sql = "insert into inventario_skins (cod_inventario,cod_usu,cod_skin)
                                    values (null,'$codusu','$compra')";
$sql4 = "update tbusuarios set dinheiro = $dinheirofinal where cod_usu = $codusu;";   
    $update = $conexao->query($sql4);
    $insert = $conexao->query($sql);
    if($insert == true){
        header('location:personagem.php?compraskin=ok');
    }
}
else{
    header('location:personagem.php?compraskin=erro');
}
?>