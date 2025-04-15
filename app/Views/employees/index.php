<?php

namespace App\Views\employees;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Employee List</h1>
        <a href="<?= site_url('employees/create') ?>">Add New Employee</a>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= esc($employee->id) ?></td>
                    <td><?= esc($employee->name) ?></td>
                    <td><?= esc($employee->email) ?></td>
                    <td><?= esc($employee->position) ?></td>
                    <td>
                        <a href="<?= site_url('employees/edit/' . $employee->id) ?>">Edit</a>
                        <a href="<?= site_url('employees/delete/' . $employee->id) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>