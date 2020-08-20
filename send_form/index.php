<html>
	<head>
		<meta charset="utf-8" />
    	<title>Form Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--<script src="jquery-3.3.1.min.js"></script>-->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Form</h2>
				<p class="lead">Preencha o seu cadastro!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="post">
							<div class="form-group">
								<label for="name">Nome</label>
								<input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome">
							</div>

							<div class="form-group">
								<label for="email">E-mail</label>
								<input name="email" type="text" class="form-control" id="email" placeholder="Digite o seu e-mail">
							</div>

							<div class="form-group">
								<label for="telefone">Telefone</label>
								<input name="telefone" type="text" class="form-control" id="telefone" placeholder="(11)99999-9999">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>

</html>