<?php 
    # include tem como objetivo incluir scripts de outra página 
    include "menu.php"; //warning

    //require "menu2.php"; //fatal error
?>

Conteúdo da página (INICIO)

<br><hr><br>

<?php 
    # include_once tem como objetivo incluir os scripts de outra página 
    # APENAS UMA VEZ
    include_once "menu.php"; //warning

    //require "menu2.php"; //fatal error
?>