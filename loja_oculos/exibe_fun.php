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

				echo "<p> <b>Nome:</b> $registro[0] </p>";
                echo "<p> <b>Nascionalidade:</b> $registro[1] </p>";
                echo "<p> <b>Natualidade:</b> $registro[2] </p>";
				echo "<p> <b>CPF:</b> $registro[3] </p>";
				echo "<p> <b>RG:</b> $registro[4] </p>";
				echo "<p> <b>Telefone:</b> $registro[5] </p>";
                echo "<p> <b>Data do Registro:</b> $registro[6] </p>";
                echo "<p> <b>Endereço:</b> $registro[7] </p>";
                echo "<p> <b>Login:</b> $registro[8] </p>";
                echo "<p> <b>Senha:</b> $registro[9] </p>";
                echo "<p> <b>Função:</b> $registro[10] </p>";
                echo "<p> <b>Status:</b> $registro[11] </p>";
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