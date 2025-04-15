<?php

namespace App\Validation;

use CodeIgniter\Validation\ValidationInterface;

class SupplierValidation implements ValidationInterface
{
    protected $rules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email',
        'phone' => 'required|min_length[10]|max_length[15]',
        'address' => 'required|max_length[255]',
    ];

    protected $messages = [
        'name' => [
            'required' => 'The supplier name is required.',
            'min_length' => 'The supplier name must be at least 3 characters long.',
            'max_length' => 'The supplier name cannot exceed 100 characters.',
        ],
        'email' => [
            'required' => 'The email address is required.',
            'valid_email' => 'Please provide a valid email address.',
        ],
        'phone' => [
            'required' => 'The phone number is required.',
            'min_length' => 'The phone number must be at least 10 digits long.',
            'max_length' => 'The phone number cannot exceed 15 digits.',
        ],
        'address' => [
            'required' => 'The address is required.',
            'max_length' => 'The address cannot exceed 255 characters.',
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