<?php session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro ONGs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/cadastro_ongs.css">
	<link rel="icon" type="imagem/png" href="/img/iPettt.png" />
</head>
 <script type="text/javascript">
        function ipet(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; 

            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') ';

            if(telefone.value.length == 10)
                telefone.value = telefone.value + '-'; 
  
}
    </script>
<body>
	<section>
		<div class="formario_login">
			<div class="conteiner-box">
				<div class="text-area">
					<div class="icone">
						<img src="img/iPettt.png" alt="">
					</div>
					<?php include 'condicional-cadastro.php'; ?>
					<div class="formulario1">
						<form action="verificar_cadastro_ong.php" method="POST">
							<div class="fild">
								<div class="controle">
									<p><label for="nome-ong">ONG </label></p>
										<input type="text" name="o-nome-ong" id="nome-ong" size="35" placeholder="Digite o nome da ONG">
									</div>
								</div>

								<div class="fild">
									<div class="controle">
										<p><label for="cnpj">CNPJ </label></p>
											<input type="text" name="o-cnpj" id="cnpj" size="35" placeholder="00.000.000/0000-00">
										</div>
									</div>


									<div class="fild">
										<div class="controle">
											<p><label for="facebook">Facebook </label></p>
												<input type="text" name="o-facebook" id="facebook" size="35" placeholder="facebook.com/minhaong">
											</div>
										</div>

										<div class="fild">
											<div class="controle">
												<p><label for="instagram">Instagram </label></p>
													<input type="text" name="o-instagram" id="instagram" size="35" placeholder="instagram.com/minhaong">
												</div>
											</div>

											<div class="fild">
												<div class="controle">
													<p><label for="email">Email </label></p>
														<input type="text" name="o-email" id="email" size="35" placeholder="minhaong@email.com">
													</div>
												</div>

												<div class="fild">
													<div class="controle">
														<p><label for="telefone">Telefone </label></p>
															<input type="text" name="o-telefone" id="telefone" size="35" placeholder="(00) 00000-0000" onkeypress="ipet(this)">
														</div>
													</div>


													<div class="fild">
														<div class="controle">
															<p><label for="usuario">Usuário </label></p>
																<input type="text" name="o-usuario" id="usuario" size="35" placeholder="Digite um usuario">
															</div>
														</div>
														<div class="fild">
															<div class="controle">	
																<p><label for="senha">Senha </label></p>
																	<input type="password" name="o-senha" id="senha" size="35" placeholder="Digite uma senha">
																</div>
															</div>

															<div class="fild">
																<div class="controle">
																	<p><label for="conf_senha"> Confirme a senha </label></p>
																		<input type="password" name="o-conf-senha" id="conf_senha" size="35" placeholder="Digite novamente a senha">
																	</div>
																</div>

																<div class="fild">
																	<div class="controle">
																		<p><label for="descricao">Descrição</label></p>
																			<input type="text" name="o-descricao" id="descricao" size="35" placeholder="Descreva sua ONG">
																		</div>
																	</div>

																	<div class="botao">
																		<input type="submit" value="Cadastrar">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</form>
											</section>
											<br>
											<br>
											<section>
												<div class="botao-volta">
													<p><a href="login.php">Fazer login</a></p>
												</div>
											</section>
											<br>
											<br>
										</body>
										</html>