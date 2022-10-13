<?php 

    session_start();

    /* 
    echo "<pre>";
        print_r($_SESSION);
    echo "</pre>";

    # Remover indicies de array de sessão (remove apenas se existir)
    # unset();

    unset($_SESSION["x"]);

    echo "<pre>";
        print_r($_SESSION);
    echo "</pre>";

    # destruir a variável de sessão (sessão sera destruída)
    # em seguida forçar um redirecionamento
    # session_destroy();

    session_destroy();

    echo "<pre>";
        print_r($_SESSION);
    echo "</pre>";
    */

    session_destroy();
    header("location: ../index.php");

?>