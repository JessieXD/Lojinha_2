<?php
require_once '../app/modelos/CrudCategoria.php';

$crud = new CrudCategoria();
//$crud = [];

//seguranca
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT); //consulte os slides.

//$categorias = $crud->getCategorias();

$categoria = $crud->getCategorias();

print_r($categoria);

//    exit();


