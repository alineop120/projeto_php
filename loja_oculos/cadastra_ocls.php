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
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
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
                <legend>CADASTRO DE ÓCULOS</legend>
                
                <label>Marca:</label>
                <input type="text" placeholder="Digite a marca" required>
                
                <label>Modelo:</label>
                <input type="text" placeholder="Digite o modelo" required>
                
                <label>Material:</label>
                <select>
                    <option value="aluminio">Alumínio</option>
                    <option value="aco">Aço</option>
                    <option value="metal">Metal</option>
                </select>
                
                <label>Preço:</label>
                <input type="text" placeholder="Digite o preço" required>
                
                <label>Foto:</label>
                <input type="file">
                
                <label>Categoria:</label>
                <select>
                    <option value="retangular">Retangular</option>
                    <option value="redondo">Redondo</option>
                    <option value="quadrado">Quadrado</option>
                </select>
                
				<div class="preview-area">
            		<img src="img/oculos-exemplo.png" alt="Exemplo de Óculos">
            		<p>Área de visualização do óculos</p>
        		</div>

                <input type="submit" value="Cadastrar Óculos">
            </fieldset>
        </form>
    </main>

    <footer id="rodape">
        <div id="texto_institucional">
            <h6>OCLS - CONTROL</h6> 
            <h6>[Endereço da Loja] -- Fone: (61) 9966 - 6677</h6> 
        </div>
    </footer>
</body>
</html>