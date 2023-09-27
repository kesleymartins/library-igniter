<?php if (session('errors')): ?>
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">
            Verifique os seguintes erros antes de continuar
        </h4>

        <?php foreach(session('errors') as $error): ?>
            <hr />
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
