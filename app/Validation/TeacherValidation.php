<?php

namespace App\Validation;

use CodeIgniter\Validation\ValidationInterface;

class TeacherValidation implements ValidationInterface
{
    protected $rules = [
        'name' => 'required|min_length[3]|max_length[50]',
        'email' => 'required|valid_email',
        'subject' => 'required|min_length[3]|max_length[50]',
        'phone' => 'required|regex_match[/^[0-9]{10}$/]',
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
        'subject' => [
            'required' => 'The subject field is required.',
            'min_length' => 'The subject must be at least 3 characters long.',
            'max_length' => 'The subject cannot exceed 50 characters.',
        ],
        'phone' => [
            'required' => 'The phone field is required.',
            'regex_match' => 'The phone number must be 10 digits long.',
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