<?= helper('form') ?>

<?= $this->include('shared/_form_errors') ?>

<?= form_with("/books", $book, ['class' => 'border rounded p-2']) ?>
    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $book->title ?>"/>
    </div>

    <select name="author" id="author" class="form-select mb-3" aria-label="Default select example">
        <option selected>Selecione o Autor</option>

        <?php foreach($authors as $author): ?>
            <option value="<?= $author->id ?>">
                <?= $author->name ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
<?= form_close() ?>
