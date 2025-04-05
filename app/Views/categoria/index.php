<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorias</title>
</head>
<body>
    <h1>LISTADO DE CATEGORIAS</h1>
    <td> <a href="/categoria/new">crear</a></td>
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
                <a href="/categoria/show/<?= $p ['id']?>">show</a>
                <a href="/categoria/edit/<?= $p ['id']?>">edit</a>
                <form action="categoria/delete/<?= $p ['id']?>" method="post">
                    <button type="submit">Eliminar</button>
                </form>
                
            </tr>   
        <?php endforeach  ?>  
    </table>
    </body>
</html>