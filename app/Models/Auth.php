<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model
{
    protected $table = 'spring_users';
    protected $allowedFields = ['name', 'username',    'email',    'phone',    'password',    'passtext',    'active',    'registered',    'ip', 'activation_code',    'last_login'];

    public function Auth($username, $password)
    {
        return $this->asArray()
            ->where(['username' => $username, 'password' => $password])
            ->first();
    }
}