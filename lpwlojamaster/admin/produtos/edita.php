<?php
require_once('../inc/conexao.php');
require_once($base_path.'inc/cabecalho.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$sql = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao' WHERE id='$id'";
$resultado = pg_query($conexao,$sql);
if($resultado != false){
	  	echo 'deu bom!';
	  }
	  else{
	  	echo 'deu ruim!';
	  }
	 $full_path = $base_url.'../admin/produtos/index.php?id='. $id);
	 echo  '<a class="btn btn-primary" href='. $full_path .'>Voltar</a>';
?>
