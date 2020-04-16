<?php //criando a sessão
session_start();

?>
<?php  

if (isset($_SESSION['anonimo'])) {
	include 'cadastro-usuario.html';
}
	elseif (isset($_SESSION['usuario'])) {
		unset($_SESSION['usuario']);
		$_SESSION['anonimo'] = true;
		include 'cadastro-usuario.html';

}
 ?>

 <?php 
$nome = $_POST['u-nome'];
$sobrenome = $_POST['u-sobrenome'];
$nomeOng = $_POST['u-nome-ong'];
$email = $_POST['u-email'];
$nickname = $_POST['u-nickname'];
$senha = $_POST['u-senha'];
$conf_senha = $_POST['u-conf-senha'];
?>

<?php if(empty($nome) || empty($sobrenome) || empty($email) || empty($nickname) || empty($senha) || empty($conf_senha) || empty($nomeOng)): ?>
	<?php echo "<div class='erro'><h1>Por favor preenchar todos os campos</h1></div>"; ?>

	<?php elseif(strrpos($email, "@") == false): ?>
		<?php echo "<div class='erro'><h1>Por favor digite um email valido</h1></div>"; ?>
	<?php elseif(strlen($nome) > 20): ?>
		<?php echo "<div class='erro'><h1>Campo nome minimo de 20 caracteres excedido</h1></div>"; ?>
	<?php elseif(strlen($sobrenome) > 20): ?>
		<?php echo "<div class ='erro'><h1><Campo sobrenome minimo de 20 caracteres excedido/h1></div>"; ?>
	<?php elseif(strlen($nomeOng) > 36): ?>
		<?php echo "<div class ='erro'><h1>Campo nome da ong deve ter no minimo de 36 caracteres</h1><div>"; ?>
	<?php elseif(strlen($senha) < 8): ?>
	 	<?php echo "<div class ='erro'><h1>A senha deve ter no minimo 8 caracteres</h1></div>"; ?>
	<?php elseif($senha != $conf_senha): ?>
		<?php echo "<div class ='erro'><h1> As senha não coincidem </h1></div>"; ?>
<?php endif ?>