<?php
	session_start();
	
//  $conectar = mysqli_connect('localhost', '[login]', '[senha]', '[database]');                                                        
	$conectar = mysqli_connect('localhost', 'root', '', 'db_loja_oculos');
	
	$login = $_POST["login"]; 
	$senha = $_POST["senha"];
	
	$sql_consulta = "SELECT login_fun, senha_fun, nome_fun, id_fun, funcao_fun
					FROM funcionarios
					WHERE
							login_fun = '$login'
					AND
							senha_fun = '$senha'
					AND
							status_fun = 'ATIVO'";
	$resultado_consulta = mysqli_query($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows($resultado_consulta);
	
	if ($linhas == 1) {
/*      mysqli_fetch_row([tabela]) - estrair os dados de uma tabela e coloca numa variável.
									Toda variável local é uma array no php*/
		$registro = mysqli_fetch_row($resultado_consulta);
		
		//Criação das credenciais
		$_SESSION["nome"] = $registro[2];
		$_SESSION["codigo"] = $registro[3];
		$_SESSION["funcao"] = $registro[4];
		
		echo "<script>
					location.href = ('administracao.php')
			</script>";
	}
	else 
	{
		echo "<script>
				alert ('Login ou Senha Incorretos! Digite novamente!!')
			</script>";
		echo "<script> location.href = ('index.php') </script>";
	}

?>