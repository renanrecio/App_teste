<?php
	 
		   include '../bd.php';
		
		   date_default_timezone_set('America/Sao_Paulo');
		   //$data_hoje = date('Y-m-d');
		   $data_hoje = date('Y-m-d H:i:s');
		   
		   $id_loja = $_POST['id_loja'];
			  
		   $id_usuario = $_POST['id_usuario'];
		   
		   		   
		   $consult_vendas = "select * from `vendas_app_sistematize` where id_loja = '".$id_loja."' and id_usuario = '".$id_usuario."' and status_venda = '' ";
			
			
		   $result_vendas = mysqli_query( $ligacao, $consult_vendas);
		   
		   $existe_vendas = mysqli_num_rows($result_vendas);
			
			$i = 1;
		
			while ($linha = mysqli_fetch_assoc($result_vendas)) {

					$consulta_vendas[$i] = $linha;
	
					$i++;

			}//fim do while
  
			//Pegar o peso, altura, largura, comprimento de cada produto, chamar rest dos correios calcular o frete de cada produto, somar e dar um echo.
			
	 ?>
	