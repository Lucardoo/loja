<?php 
require_once('../inc/conexao.php');
require_once($base_path.'inc/cabecalho.php');

if(isset($_SESSION['nome'])){
	
	$nome = $_POST['nome'];
    $preco = (float) $_POST['preco'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO produtos(nome,preco,descricao) VALUES ('$nome',$preco,'$descricao')";
    $resultado = pg_query($conexao , $sql);

    if($resultado != false){
	  	echo 'deu bom!';
	  }
	  else{
	  	echo 'deu ruim!';
	  }
	 $full_path = $base_url.'../admin/produtos/index.php';
	 echo  '<a class="btn btn-primary" href='. $full_path .'>Voltar</a>';
}
?>