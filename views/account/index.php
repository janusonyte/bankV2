<body style="background-color:grey;">
    <div class="container">
        <div class="col m-5">
            <h1 style="color:crimson; font-weight: bold; text-decoration: underline;" class="display-3">Accounts</h1>
        </div>
        <div class="col m-5">
            <a class="btn btn-success" href="/account/create/">Create an account</a>
        </div>
        <?php if (empty($accounts)): ?>
        <p>Bank is empty. Start by creating a new account</p>
        <?php else: ?>
        <div class="col">
            <table class="table table-dark table-striped">

                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Personal ID</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Balance</th>
                    </tr>
                </thead>
                <?php foreach ($accounts as $account): ?>
                <tbody>
                    <tr>
                        <td>
                            <?= $account['name'] ?>
                        </td>
                        <td>
                            <?= $account['lastName'] ?>
                        </td>
                        <td>
                            <?= $account['personalId'] ?>
                        </td>
                        <td>
                            LT:
                            <?= $account['accountNumber'] ?>
                        </td>
                        <td>
                            <?= $account['balance'] ?>€
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/account/edit/<?= $account['id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="/account/delete/<?= $account['id'] ?>">Close account</a>
                        </td>


                    </tr>
                </tbody>


                <?php endforeach ?>
                <?php endif ?>
</body>