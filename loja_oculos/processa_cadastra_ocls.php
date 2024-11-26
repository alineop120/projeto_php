<?php
    session_start();
    $conectar = mysqli_connect("localhost", "root", "", "db_loja_oculos");

    // Captura os dados do formulário
    $nome = $_POST["nome"];
    $marca = $_POST["marca"];
    $tipo_ocls = $_POST["tipo_ocls"];  
    $modelo = $_POST["modelo"];
    $cor_armacao = $_POST["cor_armacao"];
    $material_armacao = $_POST["material_armacao"];
    $cor_lente = $_POST["cor_lente"];
    $tipo_lente = $_POST["tipo_lente"];
    $preco = $_POST["preco"];
    $foto = $_FILES["foto"];
    
    // Caminho da imagem
    $foto_nome = "img/".$foto["name"];
    move_uploaded_file($foto["tmp_name"], $foto_nome);

    // Inserir na tabela oculos
    $sql_cadastrar = "INSERT INTO oculos (nome_ocls, marca_ocls, tipo_ocls, modelo_ocls, cor_armacao_ocls, material_armacao_ocls, cor_lente_ocls, tipo_lente_ocls, preco_ocls, imagem_ocls) 
                    VALUES ('$nome', '$marca', '$tipo_ocls', '$modelo', '$cor_armacao', '$material_armacao', '$cor_lente', '$tipo_lente', '$preco', '$foto_nome')";

    $sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
    
    if ($sql_resultado_cadastrar == true)
    {
        echo "<script>
                alert('Óculos cadastrados com sucesso!');
            </script>";
        echo "<script>
                location.href = 'cadastra_ocls.php';
            </script>";    
    } else {
        echo "<script>
                alert('Erro ao cadastrar os óculos: " . mysqli_error($conectar) . "');
            </script>";
        echo "<script>
                location.href = 'cadastra_ocls.php';
            </script>";    
    }
?>

