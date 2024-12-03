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
        <h1> RELATÓRIO DE TOTAL DE VENDAS </h1>
		<?php
			$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");			
					
			$data = date ('d/m/Y');
					
			$sql_consulta_total_vendas = "SELECT preco_ocls
                                            FROM oculos
                                            WHERE fila_compra_ocls = 'V'";
					
		    $resultado_consulta = mysqli_query ($conectar, $sql_consulta_total_vendas);		
					
			$valor_total = 0;
			while ($registro_total_vendas = mysqli_fetch_row ($resultado_consulta))
			{
				$valor_total = $valor_total + $registro_total_vendas[0];
			}
		?>
		<p> Total de vendas até a presente data: <?php echo $valor_total; ?>
		<p> <a href="relatorios.php"> Voltar </a> </p>
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