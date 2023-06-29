<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            PHP Sunset Bank
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php if (isset($_SESSION['email'])) : ?>
                <a class="nav-link button purple-gradient text-white" href="/account/create">Add a new account</a>
                <a class="nav-link button purple-gradient text-white" href="/account">Account list</a>
                <form action="<?= URL . 'logout' ?>" method="post">
                    <button type="submit" class=" red"
                        style="display: flex; flex-direction: row-reverse">Logout</button>
                </form>

                <?php endif ?>
            </div>
        </div>
    </div>
</nav>