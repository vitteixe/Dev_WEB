<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/309fc7854c.js" crossorigin="anonymous"></script>

    <style>

        body{
            text-align: center;
        }
        
        .card-form {
            background: #fafaf8;
            margin-top: 18px;
            margin-bottom: 5rem;
            height: 33rem;
            width: 28.7rem;
            border-radius: 9%;
            padding: 1.4rem;
            text-align: center;
        }

        .forms h1 {
            margin-top: 1.3rem;
            margin-bottom: -3px;
        }

        .forms #first {
            margin-top: 4rem;
        }

        .forms input {
            width: 80%;
            font-size: 1.112rem;
            margin-top: 0.9rem;
            border: 1px solid transparent;
            border-radius: 20px;
            padding: 2%;
            transition: border-color, box-shadow 0.2s;
        }

        .forms input:hover,
        .forms input:focus {
            outline: none;
            border-color: #09d;
            box-shadow: 0 0 0 3px #41bdf7;
        }

        .forms button {
            margin-top: 2.8rem;
        }

        .forms i {
            margin-left: 4px;
        }

        .check{
            color: green;
        }

        .unchecked{
            color: #c00;
            margin-bottom: -15px;
        }

        span.check, span.unchecked{
            font-weight: bold;
        }

    </style>

    <title>Doação de Sangue</title>
</head>

<body>

    <section>

        <div class="container">

            <div class="row justify-content-around">

                <div class="card-form d-flex">

                    <div class="row justify-content-center">

                        <form class="col-12 forms" method="POST">

                            <h1 class="display-5">Vamos doar sangue?</h1>
                            <span>Preencha seus dados para mais informações</span>

                            <input id="first" name="nome" type="text" placeholder="Qual seu nome?" required>

                            <input name="idade" type="text" placeholder="Você tem quantos anos?" required>

                            <input name="peso" type="text" placeholder="Quanto você pesa?" required>

                            <button type="submit" name="submit" class="col-6 btn btn-outline-success">
                                enviar <i class="fa-solid fa-paper-plane"></i>
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php

    if (isset($_POST["submit"])) {

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $peso = $_POST["peso"];

        if (($idade >= 18 && $idade <= 69) && $peso >= 50) {
            echo "<h3 class='check'>$nome você já pode doar sangue ✔ <br></h3> <h5>Agende um dia e horário para a doação.</h5>";
        } else if ($idade < 18) {
            echo "<h3 class='unchecked'>$nome você não pode doar sangue ❌</h3> <br> Você têm <span class='unchecked'>$idade anos</span> e a idade mínima é que você tenha <span class='check'>18 anos</span>.";
        } else if ($idade > 69) {
            echo "<h3 class='unchecked'>$nome você não pode doar sangue ❌</h3> <br> Você têm <span class='unchecked'>$idade anos</span> é necessário que você <span class='check'>tenha menos de 69 anos</span>.";
        } else if ($peso < 50) {
            echo "<h3 class='unchecked'>$nome você não pode doar sangue ❌</h3> <br> Você têm <span class='unchecked'>$peso Kg</span> e o <span class='check'>peso mínimo é 50 Kg</span>.";
        }
    }

    ?>

</body>

</html>