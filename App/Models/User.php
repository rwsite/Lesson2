<?php


namespace App\Models;

use App\Model;

class User extends Model
{
    protected static $table = 'users';

    public $login;
    public $email;
    public $password;

}