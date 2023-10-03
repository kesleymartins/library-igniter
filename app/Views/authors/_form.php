<?= helper('form') ?>

<?= $this->include('shared/_form_errors') ?>

<?= form_with("/authors", $author, ['class' => 'border rounded p-2']) ?>
    <div class="mb-3">
        <label for="name" class="form-label">Titulo</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= $author->name ?>"/>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
<?= form_close() ?>
