<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'contact_person', 'email', 'phone', 'address'];
    protected $returnType = 'App\Entities\SupplierEntity';
    protected $useTimestamps = true;

    // Additional methods for custom queries can be added here
}