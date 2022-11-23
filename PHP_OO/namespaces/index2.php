<?php 

    # Usando como requisição de biblioteca externa
    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    # Para selecionar qual namespace deseja utilizar, basta utilizar
    # USE assim como no exemplo
    # use Lib2\Cliente;

    # Podemos também utilizar mais de um namespace
    # dando apelido ao mesmo utilizando o aliasing (AS)
    use lib1\Cliente as ClienteLib1;
    use lib2\Cliente as ClienteLib2;

    $c = new ClienteLib2();
    print_r($c);
    echo "<br><br>";
    echo $c->__get("nome") . "<br>";

    $c = new ClienteLib1();
    print_r($c);
    echo "<br><br>";
    echo $c->__get("nome");


?>