<?php
/**
CONTORLADOR PARA PRODUTO
 * VAI VERIFICAR QUE AÇÃO O USUARIO DESEJA FAZER
 * DEPENDENDO DA AÇÃO, faz algo e exibe uma view
 */


require_once '../modelos/CrudProdutos.php';

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao) {
    case 'index':
        $crud = new CrudProdutos();
        $categorias = $crud->getProdutos();
        include '../visoes/produtos/index.php';
        break;
    case 'show' :
        $id=$_GET['id'];
        $crud = new CrudProdutos();
        $categoria = $crud->getProduto($id);
        include '../visoes/produtos/show.php';
        break;
}
