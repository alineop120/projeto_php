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
        <form id="formulario">
            <fieldset>
                <legend>CADASTRO DE FUNCIONÁRIOS</legend>
                
                <label>Nome:</label>
                <input type="text" placeholder="Digite seu nome" required>
                
                <label>CPF:</label>
                <input type="text" placeholder="Digite seu CPF" required>
                
                <label>Carteira de Trabalho:</label>
                <input type="text" placeholder="Digite seu Carteira de Trabalho" required>
                
                <label>Telefone:</label>
                <input type="text" placeholder="Digite seu Telefone" required>
                
                <label>Data de Registro:</label>
                <input type="text" placeholder="Digite sua Data de Registro" required>
                
                <label>Endereço:</label>
                <input type="text" placeholder="Digite seu Endereço" required>
                
                <label>Login:</label>
                <input type="text" placeholder="Digite seu Login" required>
                
                <label>Senha:</label>
                <input type="password" placeholder="Digite sua Senha" required>
                
                <label>Função:</label>
                <p>
                    <input type="radio" value="estoquista" checked> Estoquista
                    <input type="radio" value="vendedor"> Vendedor
                </p>
                
                <input type="submit" value="Cadastrar Funcionário">
            </fieldset>
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