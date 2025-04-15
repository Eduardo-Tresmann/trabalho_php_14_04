<?php

namespace App\Validation;

use CodeIgniter\Validation\ValidationInterface;

class PaymentValidation implements ValidationInterface
{
    protected $rules = [
        'amount' => 'required|decimal',
        'method' => 'required|string',
        'date' => 'required|valid_date',
        'user_id' => 'required|integer',
        'supplier_id' => 'permit_empty|integer',
        'employee_id' => 'permit_empty|integer',
    ];

    protected $messages = [
        'amount' => [
            'required' => 'The amount field is required.',
            'decimal' => 'The amount must be a decimal number.',
        ],
        'method' => [
            'required' => 'The payment method field is required.',
            'string' => 'The payment method must be a string.',
        ],
        'date' => [
            'required' => 'The date field is required.',
            'valid_date' => 'The date must be a valid date.',
        ],
        'user_id' => [
            'required' => 'The user ID field is required.',
            'integer' => 'The user ID must be an integer.',
        ],
        'supplier_id' => [
            'integer' => 'The supplier ID must be an integer.',
        ],
        'employee_id' => [
            'integer' => 'The employee ID must be an integer.',
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