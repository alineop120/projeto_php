<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/visualizacao.css">
    <title>Home</title>
</head>
<body>
    <header id="cabecalho">
		<div id="topo">
            <div id="logo">
                <img src="img/bob_glasses.gif" alt="Logo da Loja">
                <h1> GEEK GLASSES </h1>
            </div>
            <div id="menu_global"  class="menu_global">
				<p align="right"> 
					Olá, <?php include "valida_login.php"; ?> 
				</p>
				<?php include "menu_local.php"; ?>               
			</div>
        </div>
    </header>

    <main id="conteudo_especifico">
    	<h1> EXIBIÇÃO DE DADOS DO FUNCIONÁRIO </h1>
			<?php
				$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");	

				$cod = $_GET["codigo"];

				$sql_pesquisa = "SELECT nome_fun, 
										nacionalidade_fun, 
										naturalidade_fun, 
										cpf_fun, 
										rg_fun, 
										telefone_fun, 
										data_fun, 
										endereco_fun, 
                                        login_fun,
                                        senha_fun,
										funcao_fun, 
										status_fun 
								FROM funcionarios
								WHERE id_fun = '$cod'";
				$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

				$registro = mysqli_fetch_row($resultado_pesquisa);

				echo "<table>";
				echo "<tr><td><b>Nome:</b></td><td>$registro[0]</td></tr>";
				echo "<tr><td><b>Naturalidade:</b></td><td>$registro[1]</td></tr>";
				echo "<tr><td><b>Naturalidade:</b></td><td>$registro[2]</td></tr>";
				echo "<tr><td><b>CPF:</b></td><td>$registro[3]</td></tr>";
				echo "<tr><td><b>RG:</b></td><td>$registro[4]</td></tr>";
				echo "<tr><td><b>Telefone:</b></td><td>$registro[5]</td></tr>";
				echo "<tr><td><b>Data do Registro:</b></td><td>$registro[6]</td></tr>";
				echo "<tr><td><b>Endereço:</b></td><td>$registro[7]</td></tr>";
				echo "<tr><td><b>Login:</b></td><td>$registro[8]</td></tr>";
				echo "<tr><td><b>Senha:</b></td><td>$registro[9]</td></tr>";
				echo "<tr><td><b>Função:</b></td><td>$registro[10]</td></tr>";
				echo "<tr><td><b>Status:</b></td><td>$registro[11]</td></tr>";
				echo "</table>";

			?>
    </main>

    <footer id="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6>GEEK GLASSES - CONTROL</h6>
					<h6>Rua do Rock, 666</h6>
					<h6>E-mail: <a href="mailto:contato@geekglasses_control.com.br">contato@geekglasses_control.com.br</a></h6>
					<h6>Fone: <a href="tel:+5561996666677">(61) 9966 - 6677</a></h6> 
				</div> 
			</div>
    </footer>
</body>
</html>