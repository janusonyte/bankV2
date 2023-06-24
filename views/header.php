<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            <!-- <img width="80" height="80" src="../PHP Bank.gif"> -->
            PHP OOP Bank
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <?php

                $urlHeader = explode('/', $_SERVER['REQUEST_URI']);
                array_shift($urlHeader);


                if (count($urlHeader) == 1 && $urlHeader[0] == 'account') {
                    echo '<a class="nav-link" href="/account/create">Add a new account</a>';
                } else if (count($urlHeader) == 2 && $urlHeader[0] == 'account' && $urlHeader[1] == 'create') {
                    echo '<a class="nav-link" href="/account">Main</a>';
                } else if (count($urlHeader) == 2 && $urlHeader[0] == 'account' && $urlHeader[1] == 'edit') {
                    echo '<a class="nav-link" href="/account">Main</a>';
                } else if (count($urlHeader) == 2 && $urlHeader[0] == 'account' && $urlHeader[1] == 'delete') {
                    echo '<a class="nav-link" href="/account">Main</a>';
                } else if (count($urlHeader) == 2 && $urlHeader[0] == 'account' && $urlHeader[1] == 'destroy') {
                    echo '<a class="nav-link" href="/account">Main</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>