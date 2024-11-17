<<<<<<< HEAD
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/alterar.css">
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
    <h1> ADMINISTRAÇÃO </h1>
		<p>
			Seja bem-vindo ao sistema de controle de estoque e venda de oculos da loja mais incrivel desse Brasil!
		</p>
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
=======
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/alterar.css">
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
    <h1> ADMINISTRAÇÃO </h1>
		<p>
			Seja bem-vindo ao sistema de controle de estoque e venda de oculos da loja mais incrivel desse Brasil!
		</p>
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
>>>>>>> 68e120d9fdaff8d7cbf1c55a229d164fe0bc4d6f
</html>