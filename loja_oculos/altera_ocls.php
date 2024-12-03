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
    <title>Alterar Óculos</title>
</head>
<body>
    <header id="cabecalho">
        <div id="topo">
            <div id="logo">
                <img src="img/bob_glasses.gif" alt="Logo da Loja">
            </div>
            <div id="menu_global" class="menu_global">
                <p align="right"> 
                    Olá, <?php include "valida_login.php"; ?> 
                </p>
                <?php include "menu_local.php"; ?>               
            </div>
        </div>
    </header>
    <main id="conteudo_especifico">
        <?php
            $conectar = mysqli_connect("localhost", "root", "", "db_loja_oculos");

            $cod = $_GET["codigo"];

            $sql_pesquisa = "SELECT id_ocls, nome_ocls, marca_ocls, tipo_ocls, modelo_ocls, 
                        cor_armacao_ocls, material_armacao_ocls, cor_lente_ocls, 
                        tipo_lente_ocls, preco_ocls
                                FROM oculos 
                                WHERE id_ocls = '$cod'";
            $resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

            $registro = mysqli_fetch_row($resultado_pesquisa);
        ?>
        <form id="formulario" method="post" action="processa_altera_ocls.php">
            <fieldset>
                <legend>Alterar Óculos</legend>
                <input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
            
                <label> Nome: </label>
                <input type="text" name="nome" value="<?php echo "$registro[1]"; ?>" required>
                
                <label> Marca: </label>
                <select name="marca" required>
                    <option value="lema21"
                        <?php
							if ($registro[2] == "lema21") {
								echo "selected";
							}
						?>> Lema21
                    </option>
                    <option value="oakley"
                        <?php
							if ($registro[2] == "oakley") {
								echo "selected";
							}
						?> > Oakley
                    </option>
                    <option value="persol"
                        <?php
							if ($registro[2] == "persol") {
								echo "selected";
							}
						?> > Persol
                    </option>
                    <option value="ray-ban"
                        <?php
							if ($registro[2] == "ray-ban") {
								echo "selected";
							}
						?> > Ray-Ban
                    </option>
                </select>
                
                <label> Tipo: </label>
                <select name="tipo">
					<option value="grau"
						<?php
							if ($registro[3] == "grau") {
								echo "selected";
							}
						?> > De grau
					</option>
					<option value="leitura"
						<?php
							if ($registro[3] == "leitura") {
								echo "selected";
							}
						?> > Leitura
					</option>
					<option value="sol"
						<?php
							if ($registro[3] == "sol") {
								echo "selected";
							}
						?> > Sol
					</option>
                </select> 

                <label> Modelo do Óculos: </label>
                <select name="modelo" required>
                    <option value="aviador"
                        <?php
						    if ($registro[4] == "aviador") {
								echo "selected";
							}
						?> > Aviador
                    </option>
                    <option value="borboleta"
                        <?php
						    if ($registro[4] == "borboleta") {
								echo "selected";
							}
						?> > Borboleta
                    </option>
                    <option value="clubmaster"
                        <?php
						    if ($registro[4] == "clubmaster") {
								echo "selected";
							}
						?> > Clubmaster
                    </option>
                    <option value="classico"
                        <?php
						    if ($registro[4] == "classico") {
								echo "selected";
							}
						?> > Clássico
                    </option>
                </select>
                
                <label> Cor da Armação do Óculos: </label>
                <select name="cor_armacao" required>
                    <option value="azul"
                        <?php
						    if ($registro[5] == "azul") {
								echo "selected";
							}
						?> > Azul
                    </option>
                    <option value="cinza"
                        <?php
						    if ($registro[5] == "cinza") {
								echo "selected";
							}
						?> > Cinza
                    </option>
                    <option value="marrom-tartaruga"
                        <?php
						    if ($registro[5] == "marrom-tartaruga") {
								echo "selected";
							}
						?> > Marrom Tartaruga
                    </option>
                    <option value="nude"
                        <?php
						    if ($registro[5] == "nude") {
								echo "selected";
							}
						?> > Nude
                    </option>
                    <option value="prata"
                        <?php
						    if ($registro[5] == "prata") {
								echo "selected";
							}
						?> > Prata
                    </option>
                    <option value="dourado"
                        <?php
						    if ($registro[5] == "dourado") {
								echo "selected";
							}
						?> > Dourado
                    </option>
                    <option value="preto"
                        <?php
						    if ($registro[5] == "preto") {
								echo "selected";
							}
						?> > Preto
                    </option>
                    <option value="preto-fusco"
                        <?php
						    if ($registro[5] == "preto-fusco") {
								echo "selected";
							}
						?> > Preto Fusco
                    </option>
                </select>
                
                <label> Material da Armação: </label>
                <select name="material_armacao" required>
                    <option value="aluminio"
                        <?php
						    if ($registro[6] == "aluminio") {
								echo "selected";
							}
						?> > Alumínio
                    </option>
                    <option value="aco"
                        <?php
						    if ($registro[6] == "aco") {
								echo "selected";
							}
						?> > Aço
                    </option>
                    <option value="metal"
                        <?php
						    if ($registro[6] == "metal") {
								echo "selected";
							}
						?> > Metal
                    </option>
                    <option value="injetado"
                        <?php
						    if ($registro[6] == "injetado") {
								echo "selected";
							}
						?> > Injetado
                    </option>
                </select>
                
                <label> Cor das Lentes: </label>
                <select name="cor_lente" required>
                    <option value="dourado"
                        <?php
						    if ($registro[7] == "dourado") {
								echo "selected";
							}
						?> > Dourado
                    </option>
                    <option value="transparente"
                        <?php
						    if ($registro[7] == "transparente") {
								echo "selected";
							}
						?> > Transparente
                    </option>
                    <option value="preto"
                        <?php
						    if ($registro[7] == "preto") {
								echo "selected";
							}
						?> > Preto
                    </option>
                    <option value="azul"
                        <?php
						    if ($registro[7] == "azul") {
								echo "selected";
							}
						?> > Azul
                    </option>
                    <option value="marrom-tartaruga"
                        <?php
						    if ($registro[7] == "marrom-tartaruga") {
								echo "selected";
							}
						?> > Marrom Tartaruga
                    </option>
                </select>
                
                <label> Tipo da Lente: </label>
                <select name="tipo_lente" required>
                    <option value="comum"
                        <?php
						    if ($registro[8] == "comum") {
								echo "selected";
							}
						?> > Comum
                    </option>
                    <option value="demo-lens"
                        <?php
						    if ($registro[8] == "demo-lens") {
								echo "selected";
							}
						?> > Demo Lens
                    </option>
                </select>
                
                <label>Preço:</label>
                <input type="text" name="preco" value="<?php echo "$registro[9]"; ?>" required>

                <label>Foto:</label>
                <input type="file" name="foto">
                
                <input type="submit" name ="btn" value="Atualizar Óculos">
        </form>
    </main>

    <footer id="rodape">
        <div id="texto_institucional">
            <h6>GEEK GLASSES - CONTROL</h6>
            <h6>Rua do Rock, 666</h6>
            <h6>E-mail: <a href="mailto:contato@geekglasses_control.com.br">contato@geekglasses_control.com.br</a></h6>
            <h6>Fone: <a href="tel:+5561996666677">(61) 9966 - 6677</a></h6> 
        </div> 
    </footer>
</body>
</html>