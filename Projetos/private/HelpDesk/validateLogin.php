<?php 
    # iniciando sessão
    session_start();

    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    $user_id = null;

    $user_perfil_id = null;

    $perfis = [1 => "Administrativo", 2 => "Usuário"];

    // Usuários do sistema
    $usuarios = [
        ["id" => 1, "email" => "adm@teste.com.br", "senha"=>"123456", "perfil_id" => 1],
        ["id" => 2, "email" => "user@teste.com.br", "senha"=>"abcd", "perfil_id" => 2],
        ["id" => 3, "email" => "vitoroliv@outlook.com", "senha"=>"753159", "perfil_id" => 1],
        ["id" => 4, "email" => "usuario@user.com", "senha"=>"abcd", "perfil_id" => 2]
    ];
    
    foreach($usuarios as $user){
        
        if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["pass"]){
            $usuario_autenticado = true;
            $user_id = $user["id"];
            $user_perfil_id = $user["perfil_id"];
        }
    }

    if($usuario_autenticado){
        $_SESSION["autenticado"] = "SIM";
        $_SESSION["id"] = $user_id;
        $_SESSION["perfil_id"] = $user_perfil_id;
        header("location: home.php");
    } else {
        $_SESSION["autenticado"] = "NAO";
        header("location: ../index.php?login=erro");
    }


?>