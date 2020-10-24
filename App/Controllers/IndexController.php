<?php
namespace App\Controllers;

use App\Models\Users;

class IndexController
{
    public function home()
    {
        $userModel = new Users();
        $list = $userModel->getUserList();
        echo "<pre>";
        print_r($list);
    }

    public function about()
    {
        echo "获取用户列表2";
        $list = Users::create()->selectAll();
        echo "<pre>";
        print_r($list);
    }

    public function contact()
    {
    
    }
}