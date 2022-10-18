<?php 

    session_start();
    # Montagem do texto
    $title = str_replace("#", "-", $_POST["title"]);
    $category = str_replace("#", "-", $_POST["category"]);
    $description = str_replace("#", "-", $_POST["description"]);

    $texto = $_SESSION["id"] . "#" . $title . "#" . $category . "#" . $description . PHP_EOL; #PHP_EOL constante de quebra de linha

    # Abrindo um arquivo (nome do arquivo, método utilizado (documentação php))
    $arquivo = fopen("../../private/HelpDesk/arquivo.hd", "a");

    # escrevendo no arquivo aberto (selecionando o arquivo aberto, o que escrever no arquivo)
    fwrite($arquivo, $texto);

    # fechando o arquivo;
    fclose($arquivo);

    header("location: open.php");

?>