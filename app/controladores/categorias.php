<?php
/**
 CONTORLADOR PARA CATEGORIA
 * VAI VERIFICAR QUE AÇÃO O USUARIO DESEJA FAZER
 * DEPENDENDO DA AÇÃO, faz algo e exibe uma view
 */


    require_once '../modelos/CrudCategoria.php';

    if (isset($_GET['acao'])) {
        $acao = $_GET['acao'];
    }else{
        $acao = 'index';
    }

    switch ($acao) {
        case 'index':
            $crud = new CrudCategoria();
            $categorias = $crud->getCategorias();
            include '../visoes/categorias/index.php';
            break;
        case 'show' :
            $id=$_GET['id'];
            $crud = new CrudCategoria();
            $categoria = $crud->getCategoria($id);
            include '../visoes/categorias/show.php';
            break;
    }
