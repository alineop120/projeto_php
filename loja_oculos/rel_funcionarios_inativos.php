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
    <h1> RELATÓRIO DE FUNCIONÁRIOS ATIVOS</h1>
		<?php
			$conectar = mysqli_connect("localhost", "root", "", "db_loja_oculos");
					
			$sql_pesquisa = "SELECT
								nome_fun,
								funcao_fun
							FROM
								funcionarios
							WHERE 
								status_fun = 'inativo'";
			$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);
		?>
		<table width="100%">	
			<tr height="50px">
				<th> Nome </th>
				<th> Função </th>
			</tr>
			<?php
				while ($registro = mysqli_fetch_row($resultado_pesquisa)) 
                {
			?>
					<tr height="50px">
						<td> <?php echo $registro[0]?></td>
                        <td> <?php echo $registro[1]?></td>
					</tr>
			<?php
				}
			?>
		</table>
		<p> <a href="relatorios.php" class="btn"> Voltar </a> </p>
    </main>

    <footer id="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6>GEEK GLASSES - CONTROL</h6>
					<h6>Fenda do Biquíni, Bairro Abacaxi</h6>
					<h6>E-mail: <a href="mailto:contato@geekglasses_control.com.br">contato@geekglasses_control.com.br</a></h6>
					<h6>Fone: <a href="tel:+5561996666677">(61) 9966 - 6677</a></h6> 
				</div> 
			</div>
    </footer>
</body>
</html>