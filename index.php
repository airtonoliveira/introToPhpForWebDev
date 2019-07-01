<html>
	<head>
		<title>Site Teste</title>
	</head>

</html>
<body>
	<h1>		
		Teste de manupilação de variáveis em String:
		<br>
		<?php		
			$vaiavel_teste1 = "TESTE 01";
			$vaiavel_teste2 = $vaiavel_teste1;
			$vaiavel_teste3 = "TESTE 02";
			echo $vaiavel_teste2 . " / " . $vaiavel_teste3;
		?>
		<br>
		Acessando variável de outro bloco PHP:
		<br>
		<?php
			echo $vaiavel_teste3 . " (\"Concatenado\")";
		?>
		<br></br>
		Números:
		<?php
			$numero01 = 1;
			$numero02 = 2;
			$numero03 = $numero01++;

			echo "
			<br>$ numero01 = 1;
			<br>$ numero02 = 2;
			<br>$ numero03 = $ numero01++;";

			echo "<br> Número 01: " . $numero01;
			echo " / Número 02: " . $numero02;
			echo " / Número 03: " . $numero03;

		?>
		<br>
		<?php
			
			if($numero01<>$numero03){
				echo "== Igual<br><>Diferente<br>>Maior Que<br><Menor que<br>>=Maior ou igual que <br><=Menor ou igual que";
			}
		?>
	</h1>

</body>

<?php

//phpinfo();

?>