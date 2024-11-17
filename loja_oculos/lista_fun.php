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
        <h1> FUNCIONÁRIOS </h1>
			<?php
				$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");			

				$sql_consulta = "SELECT id_fun, nome_fun, nacionalidade_fun, natualidade_fun, cpf_fun, rg_fun, telefone_fun, data_fun, endereco_fun, funcao_fun, status_fun 
								FROM funcionarios";
				$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
			?>
			<p align="right"> <a href="cadastra_fun.php"> Cadastrar funcionário </a> </p>
			<table width="100%">
				<tr>
					<th>
						<p> Nome </p>
					</th>

                    <th>
						<p> Naturalidade </p>
					</th>
                    
                    <th>
						<p> Nacionalidade </p>
					</th>

					<th>
						<p> CPF </p>
					</th>

					<th>
						<p> RG </p>
					</th>

					<th>
						<p> Telefone </p>
					</th>

					<th>
						<p> Data de Registro </p>
					</th>

					<th>
						<p> Endereço </p>
					</th>

					<th>
						<p> Função </p>
					</th>

					<th>
						<p> Status </p>
					</th>

					<th>
						<p> Ação </p>
					</th>
				</tr>
				<?php		
					while ($registro = mysqli_fetch_row($resultado_consulta)) 
					{											
				?>						
				<tr>
					<td>
						<p>
							<a href="exibe_fun.php?codigo=<?php echo $registro[0]?>"> 
								<?php 
									echo "$registro[1]";
								?>
							</a>
						</p>
					</td>

					<td>
						<p>									 
							<?php echo "$registro[2]"; ?>
						</p>
					</td>

					<td>
						<p>									 
							<?php 
								echo "$registro[3]";
							?>
						</p>
					</td>

					<td>
						<p>
							<a href="altera_fun.php?codigo=<?php echo $registro[0]?>">
								Alterar	
							</a>
						</p>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
    </main>

    <footer id="rodape">
		<div id="texto_institucional">
			<div id="texto_institucional">
				<h6> OCLS - CONTROL </h6> 
				<h6> [Endereço da Loja] -- Fone: (61) 9966 - 6677 </h6> 
			</div> 
		</div>
    </footer>
</body>
</html>