<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model 
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];

    public function login($username, $password) {
        // Find the user by username
        $user = $this->where('name', $username)->first();

        // If the user is found and the password is correct, return user data
        // if ($user && password_verify($password, $user['password'])) {
            if ($user && $password === $user['password']) {
            return $user;
        }

        // If the credentials are invalid, return false
        return false;
    }
    
}
