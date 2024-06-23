<?php
include('./conexaocombanco/banco.php');
session_start();
$compra = $_POST['pet'];
$codusu = $_SESSION['cod_usu'];
$sql2 = "select * from tbusuarios where cod_usu = $codusu";
$sql3 = "select * from tbpets where cod_pet = $compra";

$select2 = $conexao->query($sql3);
$linha2 = $select2->fetch_array(MYSQLI_ASSOC);

$select = $conexao->query($sql2);
$linha = $select->fetch_array(MYSQLI_ASSOC);

if($linha['dinheiro'] >= $linha2['preco'] ){

$sql = "insert into inventario_pets (cod_inventario,cod_usu,cod_pet)
                                    values (null,'$codusu','$compra')";
   

    $insert = $conexao->query($sql);
    if($insert == true){
        header('location:pets.php?comprapet=ok');
    }
}
else{
    header('location:pets.php?comprapet=erro');
}
?>