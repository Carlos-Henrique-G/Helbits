<?php
    session_start();
    session_destroy();
    header('Location: frmlogin.php?login=saiu');
?>