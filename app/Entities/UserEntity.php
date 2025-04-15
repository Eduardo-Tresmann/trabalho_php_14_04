<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'username' => null,
        'password' => null,
        'email' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}