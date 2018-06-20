<?php require_once '../visoes/templates/cabecalho.php';?>


    <h2>Listagem de Categorias </h2>

    <table>
        <thead >
        <th> #</th>
        <th>nome categoria</th>
        </thead>
        <tbody id="pedro">
        <?php foreach ($categorias as $categoria):?>
            <tr id="susana">
                <td><?= $categoria->getId()?></td>
                <td><a href="?acao=show&id=<?= $categoria->getId()?>"><?= $categoria->getNome()?></a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

<?php require_once '../visoes/templates/rodape.php';?>