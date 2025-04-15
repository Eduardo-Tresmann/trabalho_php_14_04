<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'position', 'salary'];
    protected $returnType = 'App\Entities\EmployeeEntity';
    protected $useTimestamps = true;

    // Validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|is_unique[employees.email]',
        'phone' => 'required|min_length[10]|max_length[15]',
        'position' => 'required|min_length[3]|max_length[50]',
        'salary' => 'required|decimal',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long',
            'max_length' => 'Name cannot exceed 100 characters',
        ],
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Email must be a valid email address',
            'is_unique' => 'Email must be unique',
        ],
        'phone' => [
            'required' => 'Phone number is required',
            'min_length' => 'Phone number must be at least 10 digits long',
            'max_length' => 'Phone number cannot exceed 15 digits',
        ],
        'position' => [
            'required' => 'Position is required',
            'min_length' => 'Position must be at least 3 characters long',
            'max_length' => 'Position cannot exceed 50 characters',
        ],
        'salary' => [
            'required' => 'Salary is required',
            'decimal' => 'Salary must be a decimal number',
        ],
    ];
}