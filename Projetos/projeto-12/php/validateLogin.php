<?php 
    # iniciando sessão
    session_start();

    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    // Usuários do sistema
    $usuarios = [
        ["email" => "adm@teste.com.br", "senha"=>"123456"],
        ["email" => "user@teste.com.br", "senha"=>"abcd"]
    ];
    
    foreach($usuarios as $user){
        
        if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["pass"]){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        $_SESSION["autenticado"] = "SIM";
        $_SESSION["x"] = "um valor";
        $_SESSION["y"] = "outro";
        header("location: home.php");
    } else {
        $_SESSION["autenticado"] = "NAO";
        header("location: ../index.php?login=erro");
    }


?>