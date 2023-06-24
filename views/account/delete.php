<h1>Closing the account</h1>
<form action="/account/destroy/<?= $account['id'] ?>" method="post">
    <div>
        <p>Do you really want to close the account?</p>
        <h2><?= $account['name'] ?></h2>
    </div>
    <div>
        <button type="submit">Close account</button>
    </div>
    <div>
        <a href="/account">Cancel</a>
    </div>
</form>