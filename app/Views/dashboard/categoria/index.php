
   <?= $this->extend('Layouts/dashboard') ?>

    <?= $this->section('header') ?>
    LISTADO DE CATEGORIA
    <?= $this->endSection() ?>

    <?= $this->section('contenido') ?>
    <td> <a href="/dashboard/categoria/new">crear</a></td>
    <table>
        <tr>
            <th>
                id
            <th>
            <th>
                Titulo
            <th>
            <th>
                Opciones
            <th>
        </tr>
        <?php foreach($categorias as $key =>$p): ?>
            <tr>
            <td><?= $p ['id']?></td>
            <td><?= $p ['titulo']?></td>
            <td> 
                <a href="/dashboard/categoria/show/<?= $p ['id']?>">show</a>
                <a href="/dashboard/categoria/edit/<?= $p ['id']?>">edit</a>
                <form action="categoria/delete/<?= $p ['id']?>" method="post">
                    <button type="submit">Eliminar</button>
                </form>
                
            </tr>   
        <?php endforeach  ?>  
    </table>

    <?= $this->endSection() ?>