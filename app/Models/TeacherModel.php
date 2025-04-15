<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'subject', 'email', 'phone', 'address'];
    protected $returnType = 'App\Entities\TeacherEntity';
    protected $useTimestamps = true;

    // Validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'subject' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email',
        'phone' => 'required|regex_match[/^[0-9]{10}$/]',
        'address' => 'permit_empty|max_length[255]',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required.',
            'min_length' => 'Name must be at least 3 characters long.',
            'max_length' => 'Name cannot exceed 100 characters.',
        ],
        'subject' => [
            'required' => 'Subject is required.',
            'min_length' => 'Subject must be at least 3 characters long.',
            'max_length' => 'Subject cannot exceed 100 characters.',
        ],
        'email' => [
            'required' => 'Email is required.',
            'valid_email' => 'Email must be a valid email address.',
        ],
        'phone' => [
            'required' => 'Phone number is required.',
            'regex_match' => 'Phone number must be 10 digits long.',
        ],
        'address' => [
            'max_length' => 'Address cannot exceed 255 characters.',
        ],
    ];
}