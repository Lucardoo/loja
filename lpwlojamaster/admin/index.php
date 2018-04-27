<?php
require_once('inc/conexao.php');
require_once('inc/cabecalho.php');
if(isset($_SESSION['nome'])){
	?>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Admin</a></li>
			<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
		</ol>
	</nav>
	<ul>
		<li><a href="<?php echo $base_url.'produtos'; ?>">Produtos</a></li>
	</ul>
	<?php 
}else{
	?>
	<center>
		<form action="<?php echo $base_url.'login.php'; ?>" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="email">Senha</label>
				<input type="password" class="form-control" name="senha" id="senha">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</center>
	<?php
}
require_once('inc/rodape.php');