<?php

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'teacher_id', 'created_at', 'updated_at'];

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'description' => 'permit_empty|max_length[1000]',
        'teacher_id' => 'required|is_not_unique[teachers.id]',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Class name is required.',
            'min_length' => 'Class name must be at least 3 characters long.',
            'max_length' => 'Class name cannot exceed 255 characters.',
        ],
        'teacher_id' => [
            'required' => 'Teacher ID is required.',
            'is_not_unique' => 'The selected teacher does not exist.',
        ],
    ];

    protected $returnType = 'App\Entities\ClassEntity';
    protected $useTimestamps = true;
}