<?php session_start(); ?> 
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login em PHP</title>
  </head>
  <body class="bg-secondary"> 
	<!--HEADER-->
	<header>
		<div class="p-3 mb-2 bg-dark">
			<ul class="nav justify-content-center">
				<li class="nav-item">
				<a class="nav-link text-white" aria-current="page" href="#">HOME</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-white" href="#">Link</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-white" href="#">Link</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">ABOUT</a>
				</li>
			</ul>
		</div>
	</header>
	<!--//HEADER-->


	<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30rem;">

		<?php if(isset($_SESSION['not_loged'])): ?>
		<!--ALERT CARD-->
		<div class="alert alert-danger d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
			<div>
				<p>Erro: Usuário ou senha invàlida.</p>
			</div>
		</div>
		<!--//ALERT CARD-->
		<?php endif ?>
		<?php unset($_SESSION['not_loged']); ?>

		<!--PANEL LOGIN-->
  		<div class="card-body">
    		<h3>
				Painel de login
			</h3>	
  		</div>
		<div class="card-body">
			<!--LOGIN FORM-->
			<form action="login.php" method="POST">
				<div class="list-group list-group-flush">
					<div class="group-item">
						<input type="text" name="user" id="user" onfocus="this.value='';" value="usuário">
					</div>
					<div class="card-body">
						<input type="password" name="pass" id="pass" onfocus="this.value='';" value="senha">
					</div>
					<div class="group-item">
						<input class="btn btn-primary" type="submit" value="Enviar">
					</div>
				</div>
			</form>
			<!--//LOGIN FORM-->
		</div>
		<!--//PANEL LOGIN-->
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
