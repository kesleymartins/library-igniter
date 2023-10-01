<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Livros</h2>

        <?= anchor('/books/new', 'Novo Livro', ['class' => 'btn btn-primary']) ?>
    </div>

    <table class="table table-sm border rounded">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach($this->data as $index => $book): ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td><?= $book->title ?></td>
                    <td><?= $book->statusName() ?></td>
                    <td>
                        <?= anchor("/books/edit/$book->id", 'Editar')?>
                        <?= anchor("/books/delete/$book->id", 'Remover') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
