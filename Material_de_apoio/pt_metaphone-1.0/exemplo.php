<html>
<head>
<title>Exemplo do pt_metaphone</title>
</head>

<body>
<?php

	include("pt_metaphone.php");

	$A="programa de exemplo para demonstrar a gera��o de uma chave metaf�nica";

	print "<h1>".$A."</h1>\n";

	print "<h2>".pt_metaphone($A)."</h2>\n";

?>
</body>

</html>