<?php

    # TRY / tente - é responsável por encapsular todo conteúdo
    # suscetível à algum erro, usando como correção

    # ao usar o try também é necessário que finalize com Catch ou Finally
    try {

        echo "<h3> *** TRY *** </h3>";
        
        /* 
        $sql =  "Select * from clientes";
        mysql_query($sql); //erro
        */

        if(!file_exists("require_arquivo_a.php")){
            # TROW serve para lançar um erro intencionalmente
            throw new Exception("O arquivo em questão deveria estar disponível às " . date("d/m/Y H:i:s") .", mas não estava. Vamo seguir mesmo assim!");
        } 

    } catch (Error $e) {
        # CATCH / pegar - recupera o erro desenvolvido no try e trata o mesmo

        echo "<h3> *** Catch do erro *** </h3>";
        echo "<p style='color: red'>". $e . "</p>";

        # catch também armazena o erro no banco de dados, para futuras 
        # correções 

    } catch(Exception $ex){
        # capturando o erro lançado no try intencionalmente

        echo "<h3> *** Catch da exceção *** </h3>";
        echo "<p style='color: red'>". $ex . "</p>";

    } finally {
        echo "<h3> *** FINALLY *** </h3>";
    }

?>
