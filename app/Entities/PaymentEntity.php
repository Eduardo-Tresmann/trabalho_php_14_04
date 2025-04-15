<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PaymentEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'amount' => null,
        'payment_date' => null,
        'user_id' => null,
        'supplier_id' => null,
        'employee_id' => null,
        'teacher_id' => null,
        'class_id' => null,
    ];

    protected $dates = [
        'payment_date',
    ];

    protected $casts = [
        'amount' => 'float',
        'user_id' => 'int',
        'supplier_id' => 'int',
        'employee_id' => 'int',
        'teacher_id' => 'int',
        'class_id' => 'int',
    ];
}