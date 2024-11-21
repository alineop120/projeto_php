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
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
        <form id="formulario">
            <fieldset>
                <legend>CADASTRO DE FUNCIONÁRIOS</legend>
                
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
                
                <label>CPF:</label>
                <input type="text" name="cpf" placeholder="Digite seu CPF" required>
                
                <label>Carteira de Trabalho:</label>
                <input type="text" name="carteira-trabalho" placeholder="Digite seu Carteira de Trabalho" required>
                
                <label>Telefone:</label>
                <input type="text" name="telefone" placeholder="Digite seu Telefone" required>
                
                <label>Data de Registro:</label>
                <input type="text" name="data-registro" placeholder="Digite sua Data de Registro" required>
                
                <label>Endereço:</label>
                <input type="text" name="endereco" placeholder="Digite seu Endereço" required>
                
                <label>Login:</label>
                <input type="text" name="login" placeholder="Digite seu Login" required>
                
                <label>Senha:</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
                
                <label>Função:</label>
                <p>
                    <input type="radio" name="funcao" value="estoquista" checked> Estoquista
                    <input type="radio" name="funcao" value="vendedor"> Vendedor
                    <input type="radio" name="funcao" value="financeiro"> Financeiro
                </p>
                
                <input type="submit" value="Cadastrar Funcionário">
            </fieldset>
        </form>
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