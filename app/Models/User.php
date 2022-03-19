<?php

namespace App\Models;
require_once 'core\model.php';

class User extends \core\Model {
    protected $id;
    protected $username;
    protected $password;
    public $email;

    public function login(){
        echo "input username dan password";
    }

    public function register(){
        echo "masukkan id, email dan password";
    }
}