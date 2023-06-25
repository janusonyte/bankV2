<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Closing the account
                </div>
                <div class="card-body">
                    <form action="/account/destroy/<?= $account['id'] ?>" method="post">
                        <div class="mb-3 text-center">
                            <p>Do you really want to close this account?</p>
                            <h3>Name: <?= $account['name']  ?> </h3>
                            <h3>Surname: <?= $account['lastName']  ?></h3>
                            <h3>Account Number: <?= $account['accountNumber']  ?></h3>
                        </div>
                        <button type="submit" class="red mt-4">Close account :(</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>