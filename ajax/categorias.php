<html>
<head>
    <title></title>
</head>
<body>

    <ul>

    <?php
        require_once '../app/modelos/CrudCategoria.php';
    
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        foreach ($categorias as $categoria){
            echo "<li>".utf8_encode($categoria->getNome())."</li>";
        }
    ?>

    </ul>

</body>
</html>