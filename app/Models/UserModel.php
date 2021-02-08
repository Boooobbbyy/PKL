<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'username', 'password', 'date_created'];

    public function getLogin($username)
    {
        return $this->table('user')->where('username', $username)->get()->getRow();
    }
}
