<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Livros</h2>

        <?= anchor('/books/new', 'Novo Livro', ['class' => 'btn btn-primary']) ?>
    </div>

    <ul class="list-group ">
        <?php foreach ($this->data as $book): ?>
            <li class="list-group-item d-flex justify-content-between">
                <span>
                    <?= $book->title ?>
                </span>

                <span>
                    <?= $book->statusName() ?>
                </span>

                <span>
                    <?= anchor("/books/edit/$book->id", 'Editar') ?>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
<?= $this->endSection() ?>
