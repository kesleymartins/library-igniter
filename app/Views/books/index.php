<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Livros</h2>

        <?= anchor('/books/new', 'Novo Livro', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php if ($books): ?>
        <table class="table table-sm border rounded">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach($books as $index => $book): ?>
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td><?= $book->title ?></td>
                        <td><?= $book->author()->name ?: '-' ?></td>
                        <td><?= $book->statusName() ?></td>
                        <td>
                            <?= anchor("/books/edit/$book->id", 'Editar')?>
                            <?= anchor("/books/delete/$book->id", 'Remover') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info text-center" role="alert">
            Nenhum livro foi encontrado, adicione algum usando o botão acima.
        </div> 
    <?php endif; ?>
<?= $this->endSection() ?>
