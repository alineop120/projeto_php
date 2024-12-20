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
        <form id="formulario" method="post" action="processa_cadastra_fun.php">
            <fieldset>
                <legend>CADASTRO DE FUNCIONÁRIOS</legend>
                
                <div class="campo">
                    <label> Nome: </label>
                    <input type="text" name="nome" placeholder="Digite o nome" required>
                </div>

                <div class="campo">
                    <label> Nascionalidade: </label>
                    <input type="text" name="nascionalidade" placeholder="Digite a Nascionalidade" required>
                </div>
                
                <div class="campo">
                    <label> Natuaralidade: </label>
                    <input type="text" name="naturalidade" placeholder="Digite a Naturalidade" required>
                </div>
                
                <div class="campo">
                    <label> CPF: </label>
                    <input type="text" name="cpf" placeholder="Digite o CPF" required>
                </div>
                
                <div class="campo">
                    <label> RG: </label>
                    <input type="text" name="rg" placeholder="Digite o RG" required>
                </div>

                <div class="campo">
                    <label> Telefone: </label>
                    <input type="text" name="telefone" placeholder="Digite o Telefone" required>
                </div>

                <div class="campo">
                    <label> Data de Registro: </label>
                    <input type="text" name="data-registro" placeholder="Digite a Data de Registro" required>
                </div>
                
                <div class="campo">
                    <label> Endereço: </label>
                    <input type="text" name="endereco" placeholder="Digite o Endereço" required>
                </div>

                <div class="campo">
                    <label> Login: </label>
                    <input type="text" name="login" placeholder="Digite o Login" required>
                </div>

                <div class="campo">
                    <label> Senha: </label>
                    <input type="password" name="senha" placeholder="Digite a Senha" required>
                </div>

                <div class="campo">
                    <label> Função: </label>
                    <p>
                        <input type="radio" id="estoquista" name="funcao" value="estoquista" checked>
                        <label for="estoquista">Estoquista</label>

                        <input type="radio" id="vendedor" name="funcao" value="vendedor">
                        <label for="vendedor">Vendedor</label>

                        <input type="radio" id="financeiro" name="funcao" value="financeiro">
                        <label for="financeiro">Financeiro</label>
                    </p>
                </div>

                <input type="submit" value="Cadastrar Funcionário">
            </fieldset>
        </form>
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