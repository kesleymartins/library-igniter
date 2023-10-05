<?= $this->extend('layouts/application') ?>

<?= $this->section('content') ?>
    <div class="pb-2 mb-4 border-bottom d-flex align-items-center justify-content-between">
        <h2 class="h2">Editar Autor</h2>

        <?= anchor('authors', 'voltar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?= $this->include('authors/_form') ?>
<?= $this->endSection('content') ?>
