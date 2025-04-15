<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'created_at', 'updated_at'];
    protected $returnType = 'App\Entities\UserEntity';
    protected $useTimestamps = true;

    // Validation rules
    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
        'password' => 'required|min_length[6]',
        'email'    => 'required|valid_email|is_unique[users.email]',
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'Username is required',
            'is_unique' => 'Username already exists',
            'min_length' => 'Username must be at least 3 characters long',
            'max_length' => 'Username cannot exceed 20 characters',
        ],
        'password' => [
            'required' => 'Password is required',
            'min_length' => 'Password must be at least 6 characters long',
        ],
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Email must be a valid email address',
            'is_unique' => 'Email already exists',
        ],
    ];
}