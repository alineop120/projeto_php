<?php
	$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");
	
	$nome = $_POST["nome"];
    $naturalidade = $_POST['naturalidade'];
    $nacionalidade = $_POST['nascionalidade'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg']; 
    $telefone = $_POST['telefone'];
    $data_registo = $_POST['data-registro'];
    $endereco = $_POST['endereco'];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$funcao = $_POST["funcao"];

	$sql_consulta = "SELECT login_fun FROM funcionarios 
					WHERE login_fun = '$login'";

	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
		
	$linhas = mysqli_num_rows ($resultado_consulta);		
		
	if ($linhas == 1) {
	
		echo "<script> 
					alert ('Login ja cadastrado. Tente outro!') 
            </script>";

		echo "<script> 
					location.href = ('cadastra_fun.php') 
			</script>";			
	}
	else { 
		$sql_cadastrar = "INSERT INTO funcionarios (nome_fun, naturalidade_fun, nacionalidade_fun, cpf_fun, rg_fun, telefone_fun, data_fun, endereco_fun, login_fun, senha_fun, funcao_fun) 
                        VALUES 
                                ('$nome', '$naturalidade', '$nacionalidade', '$cpf', '$rg', '$telefone', '$data_registro', '$endereco',	'$login', '$senha', '$funcao')";
		$resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
		
		if ($resultado_cadastrar == true) { 		
			echo "<script> 
					alert ('$nome cadastrado com sucesso') 
                </script>";
			
			echo "<script> 
					location.href = ('cadastra_fun.php') 
                </script>";	
		}
		else { 		
			echo "<script> 
					alert ('ocorreu um erro no servidor. Tente de novo') 
                </script>";
		
			echo "<script> 
					location.href = ('cadastra_fun.php') 
                </script>";		
		}	
	}
?>