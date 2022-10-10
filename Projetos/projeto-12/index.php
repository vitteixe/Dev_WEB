<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>App Help Desk</title>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-login">

                <div class="card">

                    <div class="card-header">
                        Login
                    </div>
                   
                    <div class="card-body">

                        <form action="php/validateLogin.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="pass" type="password" class="form-control" placeholder="Senha">
                            </div>
                            
                            <!--isset() verifica se determinado índice existe no array-->
                            <?php if(isset($_GET["login"]) && $_GET["login"] == "erro") { ?>
                            
                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>
                                
                            <?php } ?>

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>