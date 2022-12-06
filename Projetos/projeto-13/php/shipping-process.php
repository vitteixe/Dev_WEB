  <!----------------------------------
    |                             |
    |    VITTEIXE PRODUCTION      |
    |           ᓚᘏᗢ              |
    |                             |
    ------------------------------->
<?php

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

    # Convocando o método de validação de mensagem
    if($mensagem->mensagemValida()){
        echo "Enviando Mensagem!";
    } else {
        echo "Erro ao enviar mensagem, existem campos inválidos";
    }

?>