<?= helper('form') ?>

<?= $this->include('shared/_form_errors') ?>

<?= form_with("/books", $book, ['class' => 'border rounded p-2']) ?>
<form method="post" action="/books" class="border rounded p-2">
    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $book->title ?>"/>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
<?= form_close() ?>
