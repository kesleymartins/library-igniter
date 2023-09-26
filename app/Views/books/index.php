<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Livros</h2>

        <a href="#" class="btn btn-primary">Novo livro</a>
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
            </li>
        <?php endforeach; ?>
    </ul>
<?= $this->endSection() ?>
