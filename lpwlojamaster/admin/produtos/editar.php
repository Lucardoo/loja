<?php
require_once('../inc/conexao.php');
require_once ($base_path.'inc/cabecalho.php');
if (isset($_SESSION['nome'])){
    
    $id=$_GET['id'];

    $sql = "SELECT * FROM produtos WHERE id='$id'";
    $resultado = pg_query($conexao, $sql);

    $dados = pg_fetch_array($resultado);

?>
        <form action="<?php echo $base_url.'produtos/edita.php';?>" method="post" >
	        <br>
	        <h4 align="center">Editar Produto</h4>
	        </br>
	        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"/>
	        </br>
	        Nome:
	        <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" class="form-control input-lg"  />
	        </br>
	        Preço:
	        <input type="text" name="preco" value="<?php echo $dados['preco']; ?>" class="form-control input-lg"  />
	        </br>
	        Descrição:
	        <textarea name="descricao" rows="10" cols="20" id="descricao" class="form-control"><?php echo $dados['descricao']; ?></textarea>
	        </br>
	        <input type="submit" value="Confirmar" class="btn btn-primary btn-md"> </input>
	        <a href="<?php echo $base_url.'produtos/index.php';?>" class="btn btn-danger btn-md">Voltar</a>
        </form>
<?php
} else{
	header("Location: ".$base_url."index.php");
}