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
        <h1> RELATORIOS </h1>
        <div class="conteudo">
            <img src="img/bob_lapis.gif" alt="bob com lapis" class="imagem-lateral">
            <ul type="none" class="lista-relatorios">
                <li><a href="rel_funcionarios_ativos.php" class="btn-relat">Relatório de Funcionários Ativos</a></li>
                <li><a href="rel_funcionarios_inativos.php" class="btn-relat">Relatório de Funcionários Inativos</a></li>
				<li><a href="rel_estoque.php" class="btn-relat">Relatório de óculos em estoque</a></li>
				<li><a href="rel_total_vendas.php" class="btn-relat">Faturamento total do mês</a></li>				
			</ul>
        </div>
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