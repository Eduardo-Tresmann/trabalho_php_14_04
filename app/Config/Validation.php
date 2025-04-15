<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    public array $ruleSets = [
        Rules::class,
    ];

    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public array $userRules = [
        'username' => [
            'rules' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'label' => 'Username',
            'errors' => [
                'required' => '{field} is required.',
                'min_length' => '{field} must be at least 3 characters long.',
                'max_length' => '{field} cannot exceed 20 characters.',
                'is_unique' => '{field} must be unique.',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[users.email]',
            'label' => 'Email',
            'errors' => [
                'required' => '{field} is required.',
                'valid_email' => 'Please provide a valid {field}.',
                'is_unique' => '{field} must be unique.',
            ],
        ],
        'password' => [
            'rules' => 'required|min_length[8]',
            'label' => 'Password',
            'errors' => [
                'required' => '{field} is required.',
                'min_length' => '{field} must be at least 8 characters long.',
            ],
        ],
    ];

    public array $supplierRules = [
        'name' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'label' => 'Supplier Name',
            'errors' => [
                'required' => '{field} is required.',
                'min_length' => '{field} must be at least 3 characters long.',
                'max_length' => '{field} cannot exceed 100 characters.',
            ],
        ],
        'contact_email' => [
            'rules' => 'required|valid_email',
            'label' => 'Contact Email',
            'errors' => [
                'required' => '{field} is required.',
                'valid_email' => 'Please provide a valid {field}.',
            ],
        ],
    ];

    public array $employeeRules = [
        'name' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'label' => 'Employee Name',
            'errors' => [
                'required' => '{field} is required.',
                'min_length' => '{field} must be at least 3 characters long.',
                'max_length' => '{field} cannot exceed 100 characters.',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'label' => 'Email',
            'errors' => [
                'required' => '{field} is required.',
                'valid_email' => 'Please provide a valid {field}.',
            ],
        ],
    ];

    public array $paymentRules = [
        'amount' => [
            'rules' => 'required|greater_than[0]',
            'label' => 'Payment Amount',
            'errors' => [
                'required' => '{field} is required.',
                'greater_than' => '{field} must be greater than 0.',
            ],
        ],
        'method' => [
            'rules' => 'required',
            'label' => 'Payment Method',
            'errors' => [
                'required' => '{field} is required.',
            ],
        ],
    ];

    public array $teacherRules = [
        'name' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'label' => 'Teacher Name',
            'errors' => [
                'required' => '{field} is required.',
                'min_length' => '{field} must be at least 3 characters long.',
                'max_length' => '{field} cannot exceed 100 characters.',
            ],
        ],
        'subject' => [
            'rules' => 'required',
            'label' => 'Subject',
            'errors' => [
                'required' => '{field} is required.',
            ],
        ],
    ];

    public array $classRules = [
        'name' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'label' => 'Class Name',
            'errors' => [
                'required' => '{field} is required.',
                'min_length' => '{field} must be at least 3 characters long.',
                'max_length' => '{field} cannot exceed 100 characters.',
            ],
        ],
        'teacher_id' => [
            'rules' => 'required|is_not_unique[teachers.id]',
            'label' => 'Teacher',
            'errors' => [
                'required' => '{field} is required.',
                'is_not_unique' => 'Selected {field} does not exist.',
            ],
        ],
    ];
}