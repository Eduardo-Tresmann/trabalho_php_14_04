<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class SupplierEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'contact_person' => null,
        'email' => null,
        'phone' => null,
        'address' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function getContactPerson()
    {
        return $this->attributes['contact_person'];
    }

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function getPhone()
    {
        return $this->attributes['phone'];
    }

    public function getAddress()
    {
        return $this->attributes['address'];
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
}