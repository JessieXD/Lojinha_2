<?php

require_once "app/modelos/CrudCategoria.php";


$crud = new CrudCategoria();
//$crud = [];

//seguranca
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT); //consulte os slides.

$categorias = $crud->getCategorias();

//    print_r($produto);
//    exit();


?>

<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
    <link rel="stylesheet" href="assets/css/estilo.css" >

</head>
<body id="quarta">

<?php foreach ($categorias as $categoria):?>
    <nav id="menu">
        <ul>
            <li><a href="produtos.php?categoria=1&nome=<?= $categoria->nome ?>"><?= $categoria->nome ?></a></li>
        </ul>

    </nav>
<?php endforeach; ?>

	<form method="post" action="produtos.php">
		<input type="text" name="busca" placeholder="Pesquisar">
		<input type="submit" value="Buscar">
	</form>

<br>
<?php
    if (isset($_SESSION['nome']) AND $_SESSION['tipo'] == 'a'){
        ?>
    	<p>Olá<?= $_SESSION['nome'] ?> | <a href="logout.php">sair</a>
<?php
    }else{
        ?>
	<form method="post" action="login.php">
		<input type="text" name="usuario" placeholder="Nome de usuario">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Entrar">
	</form>
	<?php
    }
    ?>
</body>
</html>