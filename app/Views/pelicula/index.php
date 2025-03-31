<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Peliculas</title>
</head>
<body>
    <h1>LISTADO DE PELICULAS</h1>
    <td> <a href="/pelicula/new">crear</a></td>
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
                <a href="/pelicula/show/<?= $p ['id']?>">show</a>
                <a href="/pelicula/edit/<?= $p ['id']?>">edit</a>
                <form action="pelicula/delete/<?= $p ['id']?>" method="post">
                    <button type="submit">Eliminar</button>
                </form>
                
            </tr>   
        <?php endforeach  ?>  
    </table>
    </body>
</html>