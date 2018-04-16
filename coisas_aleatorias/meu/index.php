<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>

<nav id="menu">
    <ul>
        <li><a href="produtos.php?produto=">Eletrônicos</a></li>
        <li><a href="produtos.php?produto=">Esportes</a></li>
        <li><a href="produtos.php?produto=">Móveis</a></li>
        <li><a href="produtos.php?produto=">Roupas</a></li>
    </ul>
</nav>
	<form method="GET" action="produtos.php?produto=">
		Busca<br>
		<input type="text" name="produto">
		<input type="submit" name="busca" value="Buscar">
	</form>
</body>
</html>