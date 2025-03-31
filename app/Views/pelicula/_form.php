<label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?= $pelicula['titulo'] ?>">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcio">
        <?= $pelicula['descripcion'] ?>
        </textarea>
        <button type="submit"><?= $op ?></button>