<?php

namespace App\Validation;

use CodeIgniter\Validation\ValidationInterface;

class UserValidation implements ValidationInterface
{
    protected $rules = [
        'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]',
        'confirm_password' => 'required|matches[password]',
    ];

    protected $messages = [
        'username' => [
            'required' => 'Username is required.',
            'min_length' => 'Username must be at least 3 characters long.',
            'max_length' => 'Username cannot exceed 20 characters.',
            'is_unique' => 'Username is already taken.',
        ],
        'email' => [
            'required' => 'Email is required.',
            'valid_email' => 'Please provide a valid email address.',
            'is_unique' => 'Email is already registered.',
        ],
        'password' => [
            'required' => 'Password is required.',
            'min_length' => 'Password must be at least 8 characters long.',
        ],
        'confirm_password' => [
            'required' => 'Please confirm your password.',
            'matches' => 'Passwords do not match.',
        ],
    ];

    public function getRules()
    {
        return $this->rules;
    }

    public function getMessages()
    {
        return $this->messages;
    }
}