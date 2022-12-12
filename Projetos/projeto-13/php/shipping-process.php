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

    echo "<pre>";
        print_r($mensagem);
    echo "</pre>";

    # Convocando o método de validação de mensagem
    if(!$mensagem->mensagemValida()){
        echo "Erro ao enviar mensagem, existem campos inválidos";
        header("location: ../index.php");
    } 


    $mail = new PHPMailer(true);
    

    try {
        $mail->addCustomHeader('Content-Type', 'text/plain;charset=utf-8');
        
        # Configuração do servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;     
        // $mail->Encoding = 'base64';                
        $mail->isSMTP();                                            
        $mail->Host       = "smtp.hostinger.com";//'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'vitor@traue.com.br';                     
        $mail->Password   = 'Senh@123';                               
        $mail->SMTPSecure = "PHPMailer::ENCRYPTION_STARTTLS";         
        $mail->Port       = "587";//587;                                    

        # Remetente
        $mail->setFrom('vitor@traue.com.br');
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
        $str = mb_convert_encoding('é um teste', 'UTF-8');;//$mensagem->__get('mensagem')
        $mail->Body    =  $str; //$mensagem->__get("mensagem");

        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Não foi possível enviar esse e-mail, tente novamente mais tarde!";
        echo "Detalhes do erro: {$mail->ErrorInfo}";
    }

?>