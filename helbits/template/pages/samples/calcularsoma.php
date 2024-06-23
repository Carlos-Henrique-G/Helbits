<?php
session_start();    
 include('./conexaocombanco/banco.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se foi enviado um array com inputs
    if (isset($_POST['inputs']) && is_array($_POST['inputs'])) {
        // Inicializa a variável para a soma
        $soma = 0;

        // Percorre todos os valores dos inputs para calcular a soma
        foreach ($_POST['inputs'] as $valor) {
            // Converte o valor para número (float) e adiciona à soma
            $novostatus = "update tbhabitos set status = 'SIM' where cod_hab = $valor";
            
            $update2 = $conexao->query($novostatus);
        }
            // Converte o valor para número (float) e adiciona à soma
            $soma = count($_POST['inputs']);
            
            $soma_string_dinheiro = strval($soma*500);
            $soma_string_xp = strval($soma*25);
            

            $codusu = $_SESSION['cod_usu'];

            $novodinheiro = "update tbusuarios set dinheiro = dinheiro + $soma_string_dinheiro where cod_usu = $codusu";
            $novoxp = "update tbusuarios set experiencia = experiencia + $soma_string_xp where cod_usu = $codusu";
            
            
            $update = $conexao->query($novodinheiro);
            $update2 = $conexao->query($novoxp);
            
            $dinheiroselect = "select * from tbusuarios where cod_usu = $codusu;";

             $select = $conexao->query($dinheiroselect);
            $linha = $select->fetch_array(MYSQLI_ASSOC);
            $soma_string_lvl = strval(intdiv($linha['experiencia'], 100));
            $novolvl = "update tbusuarios set nivel = $soma_string_lvl where cod_usu = $codusu";
            $update3 = $conexao->query($novolvl);   
            $_SESSION['dinheiro'] = $linha['dinheiro'];
            $_SESSION['xp'] = $linha['experiencia'];
            
            if($update3 == true ) {
                $_SESSION['lvl'] = $linha['nivel'];
                header('Location:principal.php?altera=ok');
            } else {
                header('Location:principal.php?altera=erro');
            }
    }
    
}else {
    header('Location:principal.php?altera=erro');
}
?>