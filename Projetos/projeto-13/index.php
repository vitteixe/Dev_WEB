<html>
	<head>
		<meta charset="UTF-8" />
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
		
		<link rel="icon" href="images/logo.png">
		
		<title>Send Mail</title>


	</head>

	<!----------------------------------
    |                             |
    |    VITTEIXE PRODUCTION      |
    |           ᓚᘏᗢ              |
    |                             |
    ------------------------------->

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="./images/logo.png" alt="" width="72" height="72">

				<h2>Send Mail</h2>

				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						
						<form action="./php/shipping-process.php" method="post">
							<div class="form-group">
								<label for="for">Para</label>
								<input id="for" name="for" type="text" class="form-control"  placeholder="joao@dominio.com.br">
							</div>

							<div class="form-group">
								<label for="subject">Assunto</label>
								<input id="subject" name="subject" type="text" class="form-control"  placeholder="Assunto do e-mail">
							</div>

							<div class="form-group">
								<label for="message">Mensagem</label>
								<textarea id="message" name="message" class="form-control" ></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
						</form>

					</div>
					
				</div>
      		</div>
      	</div>

	</body>
</html>