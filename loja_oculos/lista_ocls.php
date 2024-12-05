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
    <main id="conteudo_especifico">
        <h1> ÓCULOS </h1>
        <?php
			$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");			
				
			$sql_consulta = "SELECT id_ocls, 
                                    nome_ocls, 
                                    marca_ocls, 
                                    tipo_ocls, 
                                    modelo_ocls, 
                                    cor_armacao_ocls, 
                                    material_armacao_ocls, 
                                    cor_lente_ocls, 
                                    tipo_lente_ocls, 
                                    preco_ocls
							FROM oculos";
			$resultado_consulta = mysqli_query ($conectar, $sql_consulta);					
		?>
		<p align="right"> <a href="cadastra_ocls.php" class="btn"> Cadastrar óculos </a> </p>
		<table width="100%">
			<tr height="50px">
                <th> Nome </th>
                <th> Marca </th>
                <th> Tipo </th>
			    <th> Modelo </th>
				<th> Cor da Armação </th>           
				<th> Material da Armação </th>
                <th> Cor da Lente </th>
                <th> Tipo de Lente </th>
				<th> Preço </th>							
				<th> Ação </th>
			</tr>
			<?php		
				while ($registro = mysqli_fetch_row($resultado_consulta))
				{
			?>						
					<tr height="50px">
						<td>
							<a href="exibe_ocls.php?codigo=<?php echo $registro[0]?>"> 
								<?php echo $registro[1]; ?>
							</a>
						</td>
						<td><?php echo $registro[2]; ?></td>
						<td><?php echo $registro[3]; ?></td>
						<td><?php echo $registro[4]; ?></td>
						<td><?php echo $registro[5]; ?></td>	
						<td><?php echo $registro[6]; ?></td>	
						<td><?php echo $registro[7]; ?></td>	
						<td><?php echo $registro[8]; ?></td>	
						<td><?php echo $registro[9]; ?></td>							
						<td>
							<a href="altera_ocls.php?codigo=<?php echo $registro[0]?>">
								Alterar	
							</a>							
						</td>
					</tr>
				<?php
					}
				?>
		</table>	
    </main>

    <footer id="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6>GEEK GLASSES - CONTROL</h6>
					<h6>Fenda do Biquíni, Bairro Abacaxi</h6>
					<h6>E-mail: <a href="mailto:contato@geekglasses_control.com.br">contato@geekglasses_control.com.br</a></h6>
					<h6>Fone: <a href="tel:+5561996666677">(61) 9966 - 6677</a></h6> 
				</div> 
			</div>
    </footer>
</body>
</html>