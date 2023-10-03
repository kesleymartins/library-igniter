<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Autores</h2>

        <?= anchor('/authors/new', 'Novo Autor', ['class' => 'btn btn-primary']) ?>
    </div>

    <table class="table table-sm border rounded">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach($authors as $index => $author): ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td><?= $author->name ?></td>
                    <td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
