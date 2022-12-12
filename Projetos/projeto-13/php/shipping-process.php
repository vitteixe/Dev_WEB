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


    class Message{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

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

    echo "<pre>";
        print_r($mensagem);
    echo "</pre>";

    # Convocando o método de validação de mensagem
    if(!$mensagem->mensagemValida()){
        echo "Erro ao enviar mensagem, existem campos inválidos";
        die();
    } 


    $mail = new PHPMailer(true);

    try {
        # Configuração do servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
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
        $mail->Body    = $mensagem->__get("mensagem");

        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Não foi possível enviar esse e-mail, tente novamente mais tarde!";
        echo "Detalhes do erro: {$mail->ErrorInfo}";
    }

?>