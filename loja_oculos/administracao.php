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

    <main id="descricao_pagina">
        <h1> ADMINISTRAÇÃO </h1>
		<p>
			Seja bem-vindo ao sistema de controle de estoque e venda de oculos da loja mais incrivel desse Brasil!
		</p>
    </main>

    <footer id="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6>OCULOS - CONTROL</h6>
					<h6>Rua do Rock, 666</h6>
					<h6>E-mail: <a href="mailto:contato@ampli_control.com.br">contato@ampli_control.com.br</a></h6>
					<h6>Fone: <a href="tel:+5561996666677">(61) 9966 - 6677</a></h6> 
				</div> 
			</div>
    </footer>
</body>
</html>