<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Autores</h2>

        <?= anchor('/authors/new', 'Novo Autor', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php if ($authors): ?>
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
                            <?= anchor("/authors/edit/$author->id", 'Editar')?>
                            <?= anchor("/authors/delete/$author->id", 'Remover') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info text-center" role="alert">
            Nenhum autor foi encontrado, adicione algum usando o botão acima.
        </div> 
    <?php endif; ?>
<?= $this->endSection() ?>
