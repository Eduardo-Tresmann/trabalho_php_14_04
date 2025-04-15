<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['amount', 'date', 'user_id', 'supplier_id', 'employee_id', 'description'];
    protected $returnType = 'App\Entities\PaymentEntity';
    protected $useTimestamps = true;

    // Additional methods for payment-related operations can be added here
}