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
                <img src="caminho-da-imagem" alt="Logo da Loja">
                <h1>Nome da Loja</h1>
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
                
				<div class="gif-container">
					<img src="img/bob_glasses.gif" alt="Óculos animado">
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