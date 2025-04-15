<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ClassEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'description' => null,
        'teacher_id' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'int',
        'teacher_id' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}