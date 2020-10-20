<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>IPET</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- navbar -->
	<header id="header">
		<a href="" class="logo"><img src="img/iPettt.png"></a>
		<ul>
			<li><a href="index.php" onclick="toggle()">Home</a></li>
			<li><a href="index.php"  onclick="toggle()">Sobre</a></li>
			<li><a href="index.php"  onclick="toggle()">serviços</a></li>
			<li><a href="index.php"  onclick="toggle()">Pets</a></li>
			<li><a href="index.php"  onclick="toggle()">Equipe</a></li>
			<!-- <li><a href="#contato"  onclick="toggle()">Contato</a></li> -->
			<li><a href="adoção.php"  onclick="toggle()">Adoção</a></li>
			<li><a href="doacao.php"  onclick="toggle()">Doação</a></li>
			<li><a href="#"  onclick="toggle()">Ongs</a></li>
			<?php if(isset($_SESSION['nome'])): ?>
			<li><a href="index.php"  onclick="toggle()" class="cadastro_user"><?php echo $_SESSION['nome'];?> </a>
		<ul>
			<li><a href="sair.php"  onclick="toggle()" class="cadastro_user">sair</a></li>
		</ul>
			</li>
				<?php elseif (isset($_SESSION['nome_ong'])): ?>
				<li><a href="index.php"  onclick="toggle()" class="cadastro_user"><?php echo $_SESSION['nome_ong']; ?></a>
					<ul>
						<li><a href="sair.php"  onclick="toggle()" class="cadastro_user">sair</a></li>
					</ul>
				</li>
				<?php else: ?>
					<?php unset($_SESSION['nome']); ?>
					<?php unset($_SESSION['nome_ong']); ?>
					<li><a href="login.php"  onclick="toggle()" class="cadastro">cadastro</a></li>
				<?php endif ?>
		</ul>
		<div class="toggle" onclick="toggle()"></div>
	</header>

	<section class="banner-dc" id="home">
		<div class="overlay">
			<!-- <h2><span>Atitude é uma pequena<br>coisa que faz uma grande diferença</span></h2> -->
		</div>
	</section>

	<section  class="bg-color" style=" background-color: #F7F8F9;">
        <div class="container-fluid h-100">
            <div class="row form-cadastro justify-content-center p-4">
                <div class="col-md-3 align-self-center area-form">
		
		<div class="row justify-content-center mb-4">
		</div>
		<span class="small d-block text-center" style="font-size: 20px;">Faça sua Doação</span>

		<span class="small d-block text-center" style="font-size: 20px;">Insira os dados do Pet</span>

		<form action="">
		    <div class="input-group mt-2">
		        <input type="text" class="form-control outline-secondary" placeholder="Nome">
		    </div>
		    <div class="input-group mt-2">
		        <input type="text" class="form-control outline-secondary" placeholder="Espécie">
		    </div>
		    <div class="input-group mt-2">
		        <input type="text" class="form-control outline-secondary" placeholder="Raça">
		    </div>
		    <div class="input-group mt-2">
		        <input type="text" class="form-control outline-secondary" placeholder="Porte">
		    </div>
		    <div class="input-group mt-2">
		        <input type="text" class="form-control outline-secondary" placeholder="Genero">
		    </div>
		    <div class="input-group mt-2">
		        <textarea class="form-control outline-secondary" placeholder="Descrição"></textarea>
		    </div>

		    <div class="row">
		        <div class="col-md-6">
		            <button type="button" class="btn btn-info btn-block mt-2">Enviar</button>
		        </div>
		    </div>
		</form>
	</section>

	<footer class="footer-dc">
		<p>Igarassu-PE</p>
		<a href="https://github.com/edukaze/iPET" target="_black"><i class="fab fa-github"></i></a>
		<a href="https://drive.google.com/file/d/1QKOJcK75IwQ1ZFMn5FM0Eh-Dvjp1L7PK/view?usp=sharing" class="pdf" target="_black"><i class="far fa-file-pdf"></i></a>
	</footer>

	<script type="text/javascript">
		// Deixa o header fixo no site
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
		// Essa função é para o menu responsivo
		function toggle(){
			var header = document.querySelector("header");
			header.classList.toggle("active");
		}
	</script>

</body>
</html>