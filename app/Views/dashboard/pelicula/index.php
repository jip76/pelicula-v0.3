<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
LISTADOS DE PELICULAS
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <td> <a href="/dashboard/pelicula/new">crear</a></td>
    <table>
        <tr>
            <th>
                id
            <th>
            <th>
                Titulo
            <th>
            <th>
                descripcion
            <th>
            <th>
                Opciones
            <th>
        </tr>
        <?php foreach($peliculas as $key =>$p): ?>
            <tr>
            <td><?= $p ['id']?></td>
            <td><?= $p ['titulo']?></td>
            <td> <?= $p ['descripcion']?></td> 

            <td> 
                <a href="/dashboard/pelicula/show/<?= $p ['id']?>">show</a>
                <a href="/dashboard/pelicula/edit/<?= $p ['id']?>">edit</a>
                <form action="/dashboard/pelicula/delete/<?= $p ['id']?>" method="post">
                    <button type="submit">Eliminar</button>
                </form>
                
            </tr>   
        <?php endforeach  ?>  
    </table>
    <?= $this->endSection() ?>