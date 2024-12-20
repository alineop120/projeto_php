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
        <form id="formulario" method="post" action="processa_cadastra_ocls.php" enctype="multipart/form-data">
            <fieldset>
                <legend>CADASTRO DE ÓCULOS</legend>
                
                <div class="campo">
                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Digite o nome" required>
                </div>

                <div class="campo">
                    <label>Marca:</label>
                    <select name="marca" required>
                        <option value="lema21">Lema21</option>
                        <option value="oakley">Oakley</option>
                        <option value="persol">Persol</option>
                        <option value="ray-ban">Ray-Ban</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Tipo de Óculos:</label>
                    <select name="tipo_ocls" required>
                        <option value="grau">De grau</option>
                        <option value="leitura">Leitura</option>
                        <option value="sol">De sol</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Modelo do Óculos:</label>
                    <select name="modelo" required>
                        <option value="aviador">Aviador</option>
                        <option value="borboleta">Borboleta</option>
                        <option value="clubmaster">Clubmaster</option>
                        <option value="classico">Clássico</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Cor da Armação do Óculos:</label>
                    <select name="cor_armacao" required>
                        <option value="azul">Azul</option>
                        <option value="cinza">Cinza</option>
                        <option value="marrom-tartaruga">Marrom Tartaruga</option>
                        <option value="nude">Nude</option>
                        <option value="prata">Prata</option>
                        <option value="dourado">Dourado</option>
                        <option value="preto">Preto</option>
                        <option value="preto-fusco">Preto Fusco</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Material da Armação:</label>
                    <select name="material_armacao" required>
                        <option value="aluminio">Alumínio</option>
                        <option value="aco">Aço</option>
                        <option value="metal">Metal</option>
                        <option value="injetado">Injetado</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Cor da Lente:</label>
                    <select name="cor_lente" required>
                        <option value="dourado">Dourado</option>
                        <option value="transparente">Transparente</option>
                        <option value="preto">Preto</option>
                        <option value="azul">Azul</option>
                        <option value="marrom-tartaruga">Marrom Tartaruga</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Tipo da Lente:</label>
                    <select name="tipo_lente" required>
                        <option value="comum">Comum</option>
                        <option value="demo-lens">Demo Lens</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Preço do Óculos:</label>
                    <input type="text" name="preco" placeholder="Digite o preço" required>
                </div>

                <div class="campo">
                    <label>Foto:</label>
                    <input type="file" name="foto" required>
                </div>

                <input type="submit" value="Cadastrar Óculos">
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