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
		<form id="formulario" method="" action="">
            <h1> CADASTRO DE FUNCIONÁRIOS </h1>
		    <table class="centralizar">	
				<tr>
					<td>
					    <p> Nome: </p>
					</td>
				    <td>
						<p> <input type="text" required> </p>
					</td>
				</tr>

                <tr>
					<td>
					    <p> CPF: </p>
					</td>
				    <td>
						<p> <input type="text" required> </p>
					</td>
				</tr>

                <tr>
					<td>
					    <p> Carteira de Trabalho: </p>
					</td>
				    <td>
						<p> <input type="text" required> </p>
					</td>
				</tr>

                <tr>
					<td>
					    <p> Telefone: </p>
					</td>
				    <td>
						<p> <input type="text" required> </p>
					</td>
				</tr>

                <tr>
					<td>
					    <p> Data de Registro: </p>
					</td>
				    <td>
						<p> <input type="text" required> </p>
					</td>
				</tr>

                <tr>
					<td>
					    <p> Endereço: </p>
					</td>
				    <td>
						<p> <input type="text" required> </p>
					</td>
				</tr>

				<tr>
				    <td>
						<p> Login:  </p>
					</td>
					<td>
						<p> <input type="text" required>  </p>
					</td>
			
				</tr>
				<tr>
					<td>
						<p> Senha:  </p>
					</td>
					<td>
						<p> <input type="password" required>  </p>
					</td>
				</tr>

                <tr>
					<td>
						<p> Função:  </p>
					</td>
					<td>
						<p> 
							<input type="radio" value="estoquista" checked> Estoquista
							<input type="radio" value="vendedor"> Vendedor  
                        </p>
					</td>
				</tr>
                
				<tr>
					<td colspan="2">
						<p> <input type="submit" value="Cadastrar Funcionário">  </p>
					</td>
				</tr>
			</table>
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