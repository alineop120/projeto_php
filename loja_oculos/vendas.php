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
        <h1> VENDAS </h1>
		<?php
			$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");	

			$sql_consulta = "SELECT o.id_ocls, o.nome_ocls, o.marca_ocls, o.tipo_ocls, o.modelo_ocls, 
                    o.cor_armacao_ocls, o.material_armacao_ocls, o.cor_lente_ocls, 
                    o.tipo_lente_ocls, o.preco_ocls, v.descontos_ven
                            FROM oculos o
                            LEFT JOIN vendas v ON o.vendas_id_ven = v.id_ven
                            WHERE o.fila_compra_ocls = 'N'";
		    $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
		?>
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
                <th> Desconto </th>
                <th> Ação </th>
            </tr>
            <?php
                $valor_total = 0;		
                while ($registro = mysqli_fetch_row($resultado_consulta))
                {
            ?>						
                    <tr height="50px">
                        <td><?php echo $registro[1]; ?></td> <!-- Nome -->
                        <td>
                            <a href="exibe_amp.php?codigo=<?php echo $registro[0]; ?>">
                            <?php echo $registro[2]; ?>
                        </td> <!-- Marca -->
                        <td><?php echo $registro[3]; ?></td> <!-- Tipo -->
                        <td><?php echo $registro[4]; ?></td> <!-- Modelo -->
                        <td><?php echo $registro[5]; ?></td> <!-- Cor da Armação -->
                        <td><?php echo $registro[6]; ?></td> <!-- Material da Armação -->
                        <td><?php echo $registro[7]; ?></td> <!-- Cor da Lente -->
                        <td><?php echo $registro[8]; ?></td> <!-- Tipo de Lente -->
                        <td><?php echo $registro[9]; ?></td> <!-- Preço -->
                        <td><?php echo $registro[10]; ?></td> <!-- Desconto -->
                        <td>
                            <a href="processa_retira_fila.php?codigo=<?php echo $registro[0]; ?>">
		    					Retirar da fila de compras
							</a>                         
                        </td>
                    </tr>
            <?php
                }
            ?>
		</table>
        <p> <a href="ver_fila_compras.php" class="btn"> Ver a fila de compras </a> </p>
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