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
	<link rel="stylesheet" type="text/css" href="css/visualizacao.css">
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
    	<h1> EXIBIÇÃO DE DADOS DO ÓCULOS </h1>
			<?php
				$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");	

				$cod = $_GET["codigo"];

				$sql_pesquisa = "SELECT nome_ocls, 
                                        marca_ocls, 
                                        tipo_ocls, 
                                        modelo_ocls, 
                                        cor_armacao_ocls, 
                                        material_armacao_ocls, 
                                        cor_lente_ocls, 
                                        tipo_lente_ocls, 
                                        preco_ocls
							    FROM oculos
								WHERE id_ocls = '$cod'";
				$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

				$registro = mysqli_fetch_row($resultado_pesquisa);

				echo "<table class='tabela-dados'>";
				echo "<tr><td><b>Nome:</b></td><td>$registro[0]</td></tr>";
				echo "<tr><td><b>Marca:</b></td><td>$registro[1]</td></tr>";
				echo "<tr><td><b>Tipo de óculos:</b></td><td>$registro[2]</td></tr>";
				echo "<tr><td><b>Modelo:</b></td><td>$registro[3]</td></tr>";
				echo "<tr><td><b>Cor da Armação:</b></td><td>$registro[4]</td></tr>";
				echo "<tr><td><b>Material da Armação:</b></td><td>$registro[5]</td></tr>";
				echo "<tr><td><b>Cor da Lente:</b></td><td>$registro[6]</td></tr>";
				echo "<tr><td><b>Tipo da Lente:</b></td><td>$registro[7]</td></tr>";
				echo "<tr><td><b>Preço:</b></td><td>$registro[8]</td></tr>";
				echo "</table>";
			?>
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