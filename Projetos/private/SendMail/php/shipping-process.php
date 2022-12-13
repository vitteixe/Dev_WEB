  <!----------------------------------
    |                             |
    |    VITTEIXE PRODUCTION      |
    |           ᓚᘏᗢ              |
    |                             |
    ------------------------------->
<?php

    # Importando a biblioteca PHPMailer
    require "../lib/PHPMailer/Exception.php";
    require "../lib/PHPMailer/OAuth.php";
    require "../lib/PHPMailer/PHPMailer.php";
    require "../lib/PHPMailer/POP3.php";
    require "../lib/PHPMailer/SMTP.php";
    
    # Usando namespaces da biblioteca
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // header('Content-Type: text/html; charset=utf-8');
    class Message{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        public $status = ["codigo_status" => null, "descricao_status" =>""];

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        public function mensagemValida(){

            # Verificação se o campos estão vazios
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }

            return true;

        }

    }

    $mensagem = new Message();

    # Atribuindo valores do método POST ao objeto criado a cima
    $mensagem->__set("para", $_POST["for"]);
    $mensagem->__set("assunto", $_POST["subject"]);
    $mensagem->__set("mensagem", $_POST["message"]);

    # Convocando o método de validação de mensagem
    if(!$mensagem->mensagemValida()){
        echo "Erro ao enviar mensagem, existem campos inválidos";
        header("location: ../index.php");
    } 


    $mail = new PHPMailer(true);
    

    try {
        $mail->addCustomHeader('Content-Type', 'text/plain;charset=utf-8');
        
        # Configuração do servidor
        $mail->SMTPDebug = false; // SMTP::DEBUG_SERVER serve debugar o envio do e-mail     
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'projectsendmail22@gmail.com';                     
        $mail->Password   = 'dwqbggijdfepsmin';                               
        $mail->SMTPSecure = "PHPMailer::ENCRYPTION_STARTTLS";         
        $mail->Port       = 587;                                    

        # Remetente
        $mail->setFrom('projectsendmail22@gmail.com');
        # Destinatário
        $mail->addAddress($mensagem->__get("para"));
        # RESPOSTA PARA 3º PESSOA   $mail->addReplyTo('info@example.com', 'Information');
        # ENVIAR COMO CÓPIA         $mail->addCC('cc@example.com');
        # CÓPIA OCULTA              $mail->addBCC('bcc@example.com');

        # Anexos
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $mensagem->__get("assunto");
        $mail->charSet = 'UTF-8';
        $mail->Body    = $mensagem->__get("mensagem");

        $mail->send();

        $mensagem->status["codigo_status"] = 1;
        $mensagem->status["descricao_status"] = "E-mail enviado com sucesso!";


    } catch (Exception $e) {

        $mensagem->status["codigo_status"] = 0;
        $mensagem->status["descricao_status"] = "Não foi possível enviar esse e-mail, tente novamente mais tarde! Detalhes do erro: " . $mail->ErrorInfo;

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
		</script>
		
		<link rel="icon" href="../images/logo.png">
		
		<title>Send Mail</title>

</head>

<body>
    
    <div class="container">
        <div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="../images/logo.png" alt="" width="72" height="72">

				<h2>Send Mail</h2>

				<p class="lead">Seu app de envio de e-mails particular!</p>
		</div>

        <div class="row">
            <div class="col-md-12">

                <?php if($mensagem->status["codigo_status"] == 1){ ?>

                    <div class="container">
                        <h1 class="display-4 text-success mt-3">Sucesso!</h1>
                        <p><?= $mensagem->status["descricao_status"]?></p>
                        <a href="../index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>
                    
                <?php } ?>

                <?php if($mensagem->status["codigo_status"] == 0){ ?>

                    <div class="container">
                        <h1 class="display-4 text-danger mt-3">Ops!</h1>
                        <p><?= $mensagem->status["descricao_status"]?></p>
                        <a href="../index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>
                    
                <?php } ?>

            </div>
        </div>
    </div>

</body>
</html>