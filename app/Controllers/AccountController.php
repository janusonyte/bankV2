<?php

namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;

class AccountController
{
    public function index()
    {
        $data = new FileWriter('account');

        return App::view('account/index', [
            'pageTitle' => 'Accounts',
            'accounts' => $data->showAll(),
        ]);
    }

    public function create()
    {
        return App::view('account/create', [
            'pageTitle' => 'Create an account',
        ]);
    }

    public function store(array $request)
    {
        $data = new FileWriter('account');
        $data->create($request);

        header('Location: /account');
    }

    public function edit(int $id)
    {
        $data = new FileWriter('account');
        $account = $data->show($id);

        return App::view('account/edit', [
            'pageTitle' => 'Edit an account',
            'account' => $account,
        ]);
    }

    public function deposit(int $id)
    {
        $data = new FileWriter('account');
        $account = $data->show($id);

        return App::view('account/deposit', [
            'pageTitle' => 'Edit an account',
            'account' => $account,
        ]);
    }

    public function withdraw(int $id)
    {
        $data = new FileWriter('account');
        $account = $data->show($id);

        return App::view('account/withdraw', [
            'pageTitle' => 'Edit an account',
            'account' => $account,
        ]);
    }


    public function update(int $id, array $request)
    {
        $data = new FileWriter('account');
        $data->update($id, $request);

        header('Location: /account');
    }

    public function updateAdd(int $id, array $request)
    {
        $data = new FileWriter('account');
        $data->updateAdd($id, $request);

        header('Location: /account');
    }

    public function updateDeduct(int $id, array $request)
    {
        $data = new FileWriter('account');
        $data->updateDeduct($id, $request);

        header('Location: /account');
    }

    public function delete(int $id)
    {
        $account = (new FileWriter('account'))->show($id);
        return App::view('account/delete', [
            'pageTitle' => 'Close an account',
            'account' => $account,
        ]);
    }

    public function destroy(int $id)
    {
        $data = new FileWriter('account');
        $data->delete($id);

        header('Location: /account');
    }
}
