<?= $this->extend('layouts/application.php') ?>

<?= $this->section('content') ?>
  <h1> Books </h1>

  <ul>
    <?php foreach ($this->data as $book): ?>
      <li>
        <span>
          <?= $book->title ?>
        </span>
        <span>
          <?= $book->status ?>
        </span>
      </li>
    <?php endforeach; ?>
  </ul>
<?= $this->endSection() ?>
