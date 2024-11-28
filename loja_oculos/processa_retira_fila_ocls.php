<?php	
	$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");	
	$cod = $_GET["codigo"];	
	
	$sql_altera = "UPDATE oculos 		
				   SET 		fila_compra_ocls = 'S'
				   WHERE 	id_ocls = '$cod'";
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
				alert ('Óculos colocado na fila de compra com sucesso') 
			  </script>";
		echo "<script> 
				 location.href = ('vendas.php') 
			  </script>";
		exit();
	}  
	else
	{    
		echo "<script> 
				alert ('Ocorreu um erro no servidor. 
				O óculos não foi colocado na fila de compras. Tente de novo') 
			</script>";
		echo "<script> 
				location.href ('vendas.php') 
			 </script>";
	}
?>