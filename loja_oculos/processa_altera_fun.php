<?php
    session_start();

    $conectar = mysqli_connect ("localhost", "root", "", "db_loja_oculos");

    $cod = $_POST["codigo"]; 
	$funcao = $_POST["funcao"];

    if ($funcao == "administrador") {
        $senha = $_POST["senha"];
        $sql_altera = "UPDATE funcionarios
                        SET senha_fun = '$senha'
                        WHERE id_fun = '$cod'";
        $sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

        if ($sql_resultado_alteracao == true)
        {
            echo "<script>
                    alert ('Senha do administrador alterado com sucesso')
                </script>";
            echo "<script>
                    location.href = ('lista_fun.php')
                </script>";
        }
        else
        {
            echo "<script>
                    alert ('Ocorreu um erro no servidor. A senha do administrador não foi alterado.Volte e tente de novo')
                </script>";
        }
    }
    else {
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $status = $_POST["status"];
        $funcao = $_POST["funcao"];

        $sql_pesquisa = "SELECT login_fun FROM funcionarios
                        WHERE login_fun = '$login' AND id_fun <> '$cod'";
        $sql_resultado = mysqli_query ($conectar, $sql_pesquisa);

        $linhas = mysqli_num_rows ($sql_resultado);
        if ($linhas == 1) 
        {
            echo "<script>
                    alert ('Login do funcionario já existe. Tente novamente.')
                </script>";
            echo "<script>
                    location.href = ('altera_fun.php?codigo=$cod')
                </script>";
        }
        else
        {
            $sql_altera = "UPDATE funcionarios
                            SET nome_fun = '$nome', 
                                funcao_fun = '$funcao',
                                login_fun = '$login',
                                senha_fun = '$senha',
                                status_fun = '$status'
                        WHERE id_fun = '$cod'";
            $sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);
            if ($sql_resultado_alteracao == true) 
            {
                echo "<script>
                        alert ('$nome alterado com sucesso')
                    </script>";
                echo "<script>
                        location.href = ('lista_fun.php')
                    </script>";
            }
            else
            {
                echo "<script>
                        alert ('Ocorreu um erro no servidor. Dados do funcionario não foram alterados. Tente de novo')
                    </script>";
                echo "<script>
                        location.href = ('altera_fun.php?codigo=<?php echo $cod; ?>')
                    </script>";
            }
        }
    }
?>