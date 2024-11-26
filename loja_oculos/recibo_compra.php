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
        <h1> RECIBO </h1>
        <?php
			$conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");			

			$data = date ('d/m/Y');
			$id_fun = $_SESSION['codigo'];

			$sql_registro_venda = "INSERT INTO vendas
												(data_ven, funcionarios_id_fun)
									VALUES ('$data','$id_fun')";

			$resultado_registro_venda = mysqli_query ($conectar, $sql_registro_venda);
						
			$sql_consulta_ultima_venda = "SELECT id_ven
                                        FROM vendas ORDER BY id_ven DESC LIMIT 1";
						
			$resultado_consulta = mysqli_query ($conectar, $sql_consulta_ultima_venda);		
												
			$registro_id_ven = mysqli_fetch_row ($resultado_consulta);

			$sql_codigo_venda_em_ocls = "UPDATE oculos
										SET vendas_id_ven = '$registro_id_ven[0]',
											fila_compra_ocls = 'V'
										WHERE fila_compra_ocls = 'S'";
																
			$resultado_alteracao_ocls = mysqli_query ($conectar, $sql_codigo_venda_em_ocls);

			$sql_consulta_recibo = "SELECT nome_ocls, marca_ocls, tipo_ocls, 
                                        modelo_ocls, cor_armacao_ocls, 
                                        material_armacao_ocls, cor_lente_ocls, 
                                        tipo_lente_ocls, preco_ocls 
									FROM oculos 
									WHERE vendas_id_ven = '$registro_id_ven[0]'";
						
			$resultado_consulta = mysqli_query ($conectar, $sql_consulta_recibo);						
			echo "<p> Venda nº: $registro_id_ven[0]</p>";
            echo "<p> Data: $data</p>";
		?>
        <table width="100%">
			<tr>
				<th> Nome </th>
                <th> Marca </th>
                <th> Tipo </th>
                <th> Modelo </th>
                <th> Cor da Armação </th>
                <th> Material da Armação </th>
                <th> Cor da Lente </th>
                <th> Tipo de Lente </th>
                <th> Preço </th>			
			</tr>
			<?php
				$valor_total = 0;
				while ($registro = mysqli_fetch_row($resultado_consulta))
				{
			?>						
					<tr>
						<td> <p><?php echo "$registro[0]"; ?></p> </td>
						<td> <p><?php echo "$registro[1]"; ?></p> </td>
                        <td> <p><?php echo "$registro[2]"; ?></p> </td>
                        <td> <p><?php echo "$registro[3]"; ?></p> </td>
                        <td> <p><?php echo "$registro[4]"; ?></p> </td>
                        <td> <p><?php echo "$registro[5]"; ?></p> </td>
                        <td> <p><?php echo "$registro[6]"; ?></p> </td>
                        <td> <p><?php echo "$registro[7]"; ?></p> </td>
						<td>
                            <p> <?php 
									echo "$registro[8]"; 
									$valor_total = $valor_total + $registro[2];
								?> </p>
						</td>							
					</tr>
			<?php
				}
			?>
		</table>
        <p> Total: <?php echo $valor_total; ?> </p>
		<p> <a href="vendas.php"> Fechar recibo </a> </p>
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