<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class TeacherEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'subject' => null,
        'email' => null,
        'phone' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}