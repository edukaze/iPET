<?php 
session_start();
include 'banco.php';

if (isset($_SESSION['anonimo'])) {
    header("location:login.php");
}
    elseif (isset($_SESSION['anonimo'])) {
    header("location:login.php");
}

$id = $_GET['id'] ?? false;
if ($id === false) {
	header('location: edicao.php');
	exit();
}

$pdo = dbConnect();
$_SESSION['id-animal'] = $_GET['id'];

$query = "SELECT * FROM IPET_ANIMAIS WHERE ANI_CODIGO=?";

$stmt = $pdo->prepare($query);

$stmt->execute([$id]);
$edianimais = $stmt->fetchAll();
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
	<link rel="stylesheet" href="css//cadastro_doacao.css">
	<link rel="icon" type="imagem/png" href="/img/iPettt.png"/>
</head>
<body>
	<!-- navbar -->
<?php  include 'header-diminuido.php'; ?>
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
							<span class="small d-block text-center" style="font-size: 20px;">Faça sua Alteração aqui</span>

							<span class="small d-block text-center" style="font-size: 20px;">Insira os dados do Pet</span>

							<?php include 'condicional-cadastro.php'; ?>
									<?php foreach ($edianimais as $edianimal): ?>
							<form action="validar_cadastro_animais.php" method="POST" enctype="multipart/form-data">
								<div class="input-group mt-2">
									<input type="text" class="form-control outline-secondary" name="a-nome" placeholder="Nome" value="<?=$edianimal['ANI_NOME']?>" required>
								</div>
								<div class="input-group mt-2">
									<?php
									$stmt = $pdo->prepare('SELECT * FROM IPET_ESPECIE order by ESP_ESPECIE');
									$stmt->execute();
									$especies = $stmt->fetchAll();
								
									?>
									<select name="a-especie" class="form-control outline-secondary" >
										<?php foreach ($especies as $especie): ?>
										
											<option value="<?= $especie['ESP_ESPECIE']?> " required> <?= $especie['ESP_ESPECIE']?></option>
										<?php endforeach ?>

										<!-- <option value="cachorro">Cachorro</option>
										<option value="gato">Gato</option>
										<option value="hamster">Hamister</option>
										<option value="passaro">Passáro</option>
										<option value="outro">Outro</option> -->
									</div>
									<div class="input-group mt-2">
										<input type="text" class="form-control outline-secondary" name="a-raca" placeholder="Raça" value="<?=$edianimal['ANI_RAÇA']?>"required>
									</div>
									<div class="input-group mt-2">
										<select name="a-porte" class="form-control outline-secondary" >
											<option value="p" required>P</option>
											<option value="m" required>M</option>
											<option value="g" required>G</option>
										</select>
									</div>
									<div class="input-group mt-2">
										<select name="a-genero" class="form-control outline-secondary" >
											<option value="f" required>F</option>
											<option value="m" required>M</option>
										</select>
									</div>
									<div class="input-group mt-2">
										<input type="file" class="form-control outline-secondary" name="imagem" placeholder="Imagem" value="<?=$edianimal['ANI_IMAGEM']?>" required>
									</div>
									<div class="input-group mt-2">
										<textarea class="form-control outline-secondary" name="a-descricao" placeholder="Descrição" required></textarea>
									</div>

									<div class="row">
										<div class="col-md-6">
											<input type="submit" class="btn btn-info btn-block mt-2" value="Enviar" >
										</div>
									</div>
								</form>
							<?php endforeach; ?>
							</section>
	<?php include 'footer.php'; ?>

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