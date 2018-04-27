<?php 
require_once('../inc/conexao.php');
require_once($base_path.'inc/cabecalho.php');

if(isset($_SESSION['nome'])){
	        ?>
	        <form action="<?php echo $base_url.'produtos/cria.php';?>" method="post" >
	        <br>
	        <h4 align="center">Adicionar Produto</h4>
	        </br>
	        Nome:
	        <input type="text" name="nome"  class="form-control input-lg"  />
	        </br>
	        Preço:
	        <input type="text" name="preco" class="form-control input-lg"  />
	        </br>
	        Descrição:
	        <textarea name="descricao" rows="10" cols="20" id="descricao" class="form-control"></textarea>
	        </br>
	        <input type="submit" value="Confirmar" class="btn btn-primary btn-md"> </input>
	        <a href="<?php echo $base_url.'produtos/index.php';?>" class="btn btn-danger btn-md">Voltar</a>
        </form>
<?php        
}
else{
    header('Location: index.php');
}
?>