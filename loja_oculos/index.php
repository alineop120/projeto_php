<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header id="cabecalho">
        <div id="topo">
            <div id="logo">
                <img src="img/bob_glasses.gif" alt="Logo da Loja">
            </div>
        </div>
    </header>

    <main id="conteudo_especifico">
		<form id="formulario" method="post" action="processa_login.php">
			<fieldset>
				<legend> ACESSO À ÁREA RESTRITA </legend>
				<label for="login">Login:</label>
				<input type="text" id="login" name="login" placeholder="Digite seu login" required>

				<label for="senha">Senha:</label>
				<input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

				<input type="submit" value="Entrar">
			</fieldset>
		</form>
    </main>

    <footer id="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6>GEEK GLASSES - CONTROL</h6>
					<h6>Rua do Rock, 987</h6>
					<h6>E-mail: <a href="mailto:contato@geekglasses_control.com.br">contato@geekglasses_control.com.br</a></h6>
					<h6>Fone: <a href="tel:+5561996666677">(61) 2646 - 9444 </a></h6> 
				</div> 
			</div>
    </footer>
</body>
</html>