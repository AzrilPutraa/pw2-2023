<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'Azril Putra Syahri',
            'username' => 'Azril',
            'password' => 'azrilputra9',
            'email' => 'ajielputra09@gmail.com',
            'role' => 'Media Kreasi',
        ],
        [
            'no' => 2,
            'nama' => 'Faizal Fandi',
            'username' => 'Ijal',
            'password' => 'ijaal22',
            'email' => 'ijalfandi2@gmail.com',
            'role' => 'Administrator',
        ],
        [
            'no' => 3,
            'nama' => 'Ahmad Yasin',
            'username' => 'Ahmad',
            'password' => 'yasin33',
            'email' => 'ahmadyasin3@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 4,
            'nama' => 'Faqih Fauzan',
            'username' => 'Faqih',
            'password' => 'faqih44',
            'email' => 'faqihfauzan4@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 5,
            'nama' => 'Abdul Gofar',
            'username' => 'Gofar',
            'password' => 'abdul55',
            'email' => 'abdulgofar5@gmail.com',
            'role' => 'User',
        ],
    ];

    public function getAllUsers()
    {
        return $this->users;
    }
}
