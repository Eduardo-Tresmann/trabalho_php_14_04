<?php

namespace App\Validation;

use CodeIgniter\Validation\ValidationInterface;

class EmployeeValidation implements ValidationInterface
{
    protected $rules = [
        'name' => 'required|min_length[3]|max_length[50]',
        'email' => 'required|valid_email',
        'phone' => 'required|min_length[10]|max_length[15]',
        'position' => 'required|min_length[3]|max_length[30]',
        'salary' => 'required|numeric',
    ];

    protected $messages = [
        'name' => [
            'required' => 'The name field is required.',
            'min_length' => 'The name must be at least 3 characters long.',
            'max_length' => 'The name cannot exceed 50 characters.',
        ],
        'email' => [
            'required' => 'The email field is required.',
            'valid_email' => 'Please provide a valid email address.',
        ],
        'phone' => [
            'required' => 'The phone field is required.',
            'min_length' => 'The phone number must be at least 10 digits long.',
            'max_length' => 'The phone number cannot exceed 15 digits.',
        ],
        'position' => [
            'required' => 'The position field is required.',
            'min_length' => 'The position must be at least 3 characters long.',
            'max_length' => 'The position cannot exceed 30 characters.',
        ],
        'salary' => [
            'required' => 'The salary field is required.',
            'numeric' => 'The salary must be a numeric value.',
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