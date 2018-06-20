<?php
require_once '../app/modelos/CrudProdutos.php';

$crud = new CrudProdutos();
//$crud = [];

//seguranca
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT); //consulte os slides.

//$categorias = $crud->getCategorias();

$produtos = $crud->getProdutos();

print_r($produtos);

//    exit();

