<header class="p-3 mb-3 border-bottom shadow-sm" data-controller="header">
    <div class="container">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li>
                <?= anchor('books', 'Livros', ['id' => 'books', 'class' => 'nav-link px-2 link-body-emphasis']) ?>
            </li>
            <li>
                <?= anchor('authors', 'Autores', ['id' => 'authors', 'class' => 'nav-link px-2 link-body-emphasis']) ?>
            </li>
        </ul>
    </div>
</header>
