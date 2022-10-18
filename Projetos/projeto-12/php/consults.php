<?php require_once "accessValidator.php" ?>

<?php 

    # CHAMADOS
    $calls = [];

    # Abri o arquivo.hd
    $arquivo = fopen("../../private/HelpDesk/arquivo.hd", "r");

    # percorrer o arquivo enquanto houver registros (linhas) a serem recuperadas
    # feof (), testa pelo fim de um arquivo
    while(!feof($arquivo)){
        // recuperando conteúdo até o final da linha
        $register = fgets($arquivo);
        
        $calls[] = $register;
    }

    # fechar o aquivo.hd
    fclose($arquivo);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Consultar chamado - Help Desk</title>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
            <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de chamado
                    </div>

                    <div class="card-body">

                        <?php foreach($calls as $call) { ?>

                            <?php        
                                $callDates = explode("#", $call);

                                # Verificando tipo de perfil
                                if($_SESSION["perfil_id"] == 2){

                                    # só vamos exibir o chamado, se ele foi criado pelo user
                                    if($_SESSION["id"] != $callDates[0]){
                                        continue;
                                    }

                                };

                                # Pulando a impressão do dado, caso o mesmo esteja vazio
                                if(count($callDates) < 3){
                                    continue;
                                }
                            ?>
                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $callDates[1] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?= $callDates[2] ?></h6>
                                    <p class="card-text"><?= $callDates[3] ?></p>

                                </div>
                            </div>

                        <?php } ?>

                        <div class="row mt-5">

                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php" type="submit">Voltar</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>