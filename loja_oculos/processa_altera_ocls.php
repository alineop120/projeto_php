<?php
    session_start();

    // Conexão com o banco de dados
    $conectar = mysqli_connect("localhost", "root", "", "db_loja_oculos");

    // Recebendo os dados do formulário
    $id_ocls = $_POST["codigo"];
    $nome = $_POST["nome"];
    $marca = $_POST["marca"];
    $tipo_ocls = $_POST["tipo"];
    $modelo = $_POST["modelo"];
    $cor_armacao = $_POST["cor_armacao"];
    $material_armacao = $_POST["material_armacao"];
    $cor_lente = $_POST["cor_lente"]; 
    $tipo_lente = $_POST["tipo_lente"];  
    $preco_ocls = $_POST["preco"]; 
    $imagem = $_FILES["foto"];

    // Verifica se uma nova imagem foi enviada
    if ($imagem["name"] <> "") 
    {
        $imagem_nome = "img/" . $imagem["name"];		
        move_uploaded_file($imagem["tmp_name"], $imagem_nome);
    }
    else 
    {
        // Se nenhuma nova imagem foi enviada, busca a imagem existente
        $pesquisa_caminho_imagem = "SELECT imagem_ocls
                                    FROM oculos
                                    WHERE id_ocls = '$id_ocls'";
        $resultado_pesquisa = mysqli_query($conectar, $pesquisa_caminho_imagem);
        $registro = mysqli_fetch_row($resultado_pesquisa);
        $imagem_nome = $registro[0];
    }

    // Atualiza os dados do óculos
    $sql_altera = "UPDATE oculos
                            SET nome_ocls = '$nome',
                                marca_ocls = '$marca',
                                tipo_ocls = '$tipo_ocls',
                                modelo_ocls = '$modelo',
                                cor_armacao_ocls = '$cor_armacao',
                                material_armacao_ocls = '$material_armacao',
                                cor_lente_ocls = '$cor_lente',
                                tipo_lente_ocls = '$tipo_lente',
                                preco_ocls = '$preco_ocls',
                                imagem_ocls = '$imagem_nome'
                            WHERE id_ocls = '$id_ocls'";

    $sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);


    // Verifica se as atualizações foram bem-sucedidas
    if ($sql_resultado_alteracao == true) 
    {
        echo "<script>
                alert ('$modelo alterado com sucesso');
            </script>";
        echo "<script>
                location.href = ('lista_ocls.php');
            </script>";
    }
    else {
        echo "<script> 
				alert ('Ocorreu um erro no servidor. 
						Dados do amplificador não foram alterados. Tente de novo') 
			</script>";
		echo "<script> 
				location.href ('lista_ocls.php') 
			</script>";
    }
?>