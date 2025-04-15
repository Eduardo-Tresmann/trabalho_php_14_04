<?php

namespace App\Validation;

use CodeIgniter\Validation\ValidationInterface;

class ClassValidation implements ValidationInterface
{
    protected $rules = [
        'class_name' => 'required|min_length[3]|max_length[100]',
        'class_description' => 'permit_empty|max_length[255]',
        'class_capacity' => 'required|integer|greater_than[0]',
    ];

    protected $messages = [
        'class_name' => [
            'required' => 'Class name is required.',
            'min_length' => 'Class name must be at least 3 characters long.',
            'max_length' => 'Class name cannot exceed 100 characters.',
        ],
        'class_description' => [
            'max_length' => 'Class description cannot exceed 255 characters.',
        ],
        'class_capacity' => [
            'required' => 'Class capacity is required.',
            'integer' => 'Class capacity must be an integer.',
            'greater_than' => 'Class capacity must be greater than 0.',
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