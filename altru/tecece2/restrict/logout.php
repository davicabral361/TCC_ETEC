<?php

    header("Location: ../../BizLand/index.php");
    session_start();
    unset($_SESSION['email-session']);
    unset($_SESSION['senha-session']);
    unset($_SESSION['idadmin']);
    unset($_SESSION['idong']);
    unset($_SESSION['iddoador']);
    unset($_SESSION['idOngListar']);
    
    session_destroy();
?>