<?php
namespace App\Models;

use Rushy\Database\DbModel;

class Users extends DbModel
{
    protected $connectionName = 'write';
    protected $tableName = 'b_users';
    
    public function getUserList()
    {
        return $this->selectAll();
    }

    public function addUser($data)
    {
        return $this->save();
    }
}