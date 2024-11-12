<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <title>Home</title>
</head>
<body>
    <header id="cabecalho">
        <div id="topo">
            <div id="logo">
                <h1>Imagem da logo da Loja</h1>
                <h1>Nome da Loja</h1>
            </div>
        </div>
    </header>
    <main id="conteudo_especifico">
		<form id="formulario" method="post" action="processa_login.php">
            <h1> ACESSO À ÁREA RESTRITA </h1>    
			<p>
				Login: <br>
				<input type="text" name="login" required>
			</p>
			<p>
				Senha: <br>
				<input type="password" name="senha" required>
			</p>
			<p>
				<input type="submit" value="Entrar">
			</p>
		</form>
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