<<<<<<< HEAD
<?php
	if (isset($_SESSION["nome"])) {
    	// isset([variável]) - verifica se tem alguma coisa dentro da variável
    	echo "<span>" . $_SESSION["nome"] . "</span>";
	} 
	else {
    	echo "<script>
            	alert ('Você não está logado!!!');
        	</script>";

    	echo "<script>
            	location.href = ('index.php');
        	</script>";
	}
=======
<?php
	if (isset($_SESSION["nome"])) {
    	// isset([variável]) - verifica se tem alguma coisa dentro da variável
    	echo "<span>" . $_SESSION["nome"] . "</span>";
	} 
	else {
    	echo "<script>
            	alert ('Você não está logado!!!');
        	</script>";

    	echo "<script>
            	location.href = ('index.php');
        	</script>";
	}
>>>>>>> 68e120d9fdaff8d7cbf1c55a229d164fe0bc4d6f
?>