<?php
namespace App\Controllers;
use App\Model\Users;

class UsersController
{
    public function index()
    {
        $users = Users::getUserList();
        view('users', ['users'=>$users]);
    }

    public function add()
    {
        Users::addUser([
            'name' => $_POST['name'],
            'telphone' => $_POST['telphone']
        ]);
        
        header('Location:/users');
    }
}