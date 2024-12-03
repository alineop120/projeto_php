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

    <main id="conteudo_especifico" class="centralisar">
		<?php
			$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");
				
			$cod = $_GET["codigo"];
								
			$sql_pesquisa = "SELECT nome_fun, nacionalidade_fun, naturalidade_fun, cpf_fun, rg_fun, telefone_fun, data_fun, endereco_fun, login_fun, senha_fun, funcao_fun, status_fun 
								FROM funcionarios
								WHERE id_fun = '$cod'";
			$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);	
					
			$registro = mysqli_fetch_row($resultado_pesquisa);
		?>
		<form id="formulario" method="post" action="processa_altera_fun.php">
			<fieldset>
				<legend>Alterar Óculos</legend>
				<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
				<input type="hidden" name="funcao" value="<?php echo "$registro[1]"; ?>">
				<?php 
					if ($registro[10] <> "administrador") 
					{
				?>
						<div class="campo">
							<label> Nome: </label> 
							<input type="text" name="nome" value="<?php echo "$registro[0]";?>" required>
						</div>
						
						<div class="campo">
							<label> Nacionalidade: </label> 
							<input type="text" name="nacionalidade" value="<?php echo "$registro[1]";?>" required>
						</div>
						
						<div class="campo">
							<label> Naturalidade: </label> 
							<input type="text" name="naturalidade" value="<?php echo "$registro[2]";?>" required>
						</div>
						
						<div class="campo">
							<label> CPF: </label> 
							<input type="text" name="cpf" value="<?php echo "$registro[3]";?>" required>
						</div>
						
						<div class="campo">
							<label> RG: </label> 
							<input type="text" name="rg" value="<?php echo "$registro[4]";?>" required>
						</div>
						
						<div class="campo">
							<label> Telefone: </label> 
							<input type="text" name="telefone" value="<?php echo "$registro[5]";?>" required>
						</div>
						
						<!-- continuar ..... -->
						<label> Data de Registro: </label> 
						<input type="text" name="data-registro" value="<?php echo "$registro[6]";?>" required>

						<label> Endereço: </label> 
						<input type="text" name="endereco" value="<?php echo "$registro[7]";?>" required>
						
						<label> Login: </label>
						<input type="text" name="login" value="<?php echo "$registro[8]";?>" required>
						
						<label> Senha: </label>
						<input type="password" name="senha" value="<?php echo "$registro[9]";?>" required>

						<Label> Função: </Label>							
						<input type="radio" name="funcao" value="estoquista" 
							<?php
								if ($registro[10] == "estoquista") {
									echo "checked";
								}
							?>> Estoquista
						<input type="radio" name="funcao" value="vendedor"
							<?php
								if ($registro[10] == "vendedor") {
									echo "checked";
								}
							?>> Vendedor
						<input type="radio" name="funcao" value="financeiro"
							<?php
								if ($registro[10] == "financeiro") {
									echo "checked";
								}
							?>> Financeiro
						
						<label> Status: </label>
						<select name="status">
							<option value="ativo"
								<?php
									if ($registro[11] == "ativo") {
										echo "selected";
									}
								?> > Ativo 
							</option>
							<option value="inativo"<?php
								if ($registro[11] == "inativo") {
									echo "selected";
								}
								?> > Inativo 
							</option>
						</select>
						
						<input type="submit" value="Alterar Funcionário">
				<?php
					}
					else 
					{
				?>
						<label> Nome: <?php echo "$registro[0]";?> </label>
						<label> Função: <?php echo "$registro[10]";?> </label>
						<label> Login: <?php echo "$registro[8]";?> </label>

						<label> Senha: </label>
						<input type="password" name="senha" value="<?php echo "$registro[9]";?>" required>  
						
						<label> Status:  Ativo </label>
						<input type="submit" value="Alterar Usuario">								
				<?php
					}
				?>
			</fieldset>
		</form>	
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