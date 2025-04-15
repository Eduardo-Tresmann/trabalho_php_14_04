<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class EmployeeEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'email' => null,
        'phone' => null,
        'position' => null,
        'salary' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function getFullName()
    {
        return $this->name;
    }

    public function getSalaryFormatted()
    {
        return number_format($this->salary, 2);
    }
}