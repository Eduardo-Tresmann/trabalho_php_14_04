<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the seeder classes for each entity
        $this->call(UserSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ClassSeeder::class);
    }
}